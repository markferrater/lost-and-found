<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\register;
use App\Models\report;
use App\Models\retriever;
use App\Models\claim;
use Illuminate\Support\Facades\Storage;

class homeController extends Controller
{
    // for public or students
    public function public_Overview(){
        
        $reports = report::all()->map(function($report) {
            $report->formatted_time = $report->created_at->format('h:i A');
            $report->date_reported = $report->created_at->format('F j, Y');
            $report->time_ago = $report->created_at->diffForHumans();
            return $report;
    });;

        return view('public_home', compact('reports'));
    }

    // test purposes
    public function test(){
        // $claims = claim::all();
        // $claims = claim::paginate(5);
        // $claims = claim::with(['report', 'retriever'])->get();
        $claims = claim::with(['report', 'retriever'])->paginate(10);

        return view('test', compact('claims'));
    }

    //

    public function show_dashboard()
    {
        $reports = report::all()->map(function($report) {
            $report->formatted_time = $report->created_at->format('g:i a');
            $report->date_reported = $report->created_at->format('F j, Y');
            $report->time_ago = $report->created_at->diffForHumans();
            return $report;
    });;

        return view('dashboard' , compact('reports'));
    }

    public function report_item()
    {
        return view('report_item');
    }

    public function claim_item()
    {
        return view('claim_item');
    }

    public function claim_report (Request $request) {
        $request->validate([
            'item_id' => 'required|string|max:255',
            'storage_location' => 'required|string|max:255',
	        'date_retrieved' => 'required',

            'first_name' => 'required',
            'middle_name' => 'required|string|max:255',
	        'last_name' => 'required',

            'email' => 'required',
            'contact_no' => 'required|string|max:255',
	        'person_id' => 'required',

            'proof_i' => 'nullable|image|mimes:jpg,jpeg,png,gif,bmp,webp|max:9048',
            'proof_t' => 'required|string|max:255',

        ]);

        $retriever = retriever::find($request->retriever_id);

        $claim = claim::find($request->claim_id);

        $report = report::where('report_id', $request->item_id)->first();

        $imagePath = null;

        if ($request->hasFile('proof_i')) {
            $imagePath = $request->file('proof_i')->store('images', 'public');
        }

        

        if (!$report){
            return back()->with('error', 'Item does not match the report.');
        }

        report::where('report_id',$request->item_id)->update(['status' => 'found']);

        $newRetriever = retriever::create([
        'first_name' => $request->first_name,		
        'middle_name' => $request->middle_name,
        'last_name' => $request->last_name,
        'email' => $request->email,
        'contact_no' => $request->contact_no,
        'person_id' => $request->person_id,

        'proof_image' => $imagePath,

        'proof_text' => $request->proof_t,
        ]);

       $newClaim = claim::create([
        'retriever_id' => $newRetriever->retriever_id,
        'report_id' => $request->item_id,   
        'storage_location' => $request->storage_location,
        'date_retrieved' => $request->date_retrieved,
        ]);


        return redirect()->route('home.claim')->with('success', 'claim report successful.');


    }


    public function store_report (Request $request){

        $request->validate([
            'item_name' => 'required|string|max:255',
            'category' => 'required',
            'description' => 'required',
	        'date_retrieved' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif,bmp,webp|max:9048',
            'location_found' => 'required|string|max:255',
	        'date_reported' => 'required',

        ]);

        
        $imagePath = null;

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
        }

            report::create([
            'item_name' => $request->item_name,
            'category' => $request->category,
	        'description' => $request->description,
            'image' => $imagePath,
            'location_found' => $request->location_found,
	        'date_reported' => $request->date_reported,
             ]);
    

        

        return redirect()->route('home.report')->with('success', 'successfully.');


    }

}
