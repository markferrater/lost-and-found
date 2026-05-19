<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class claim extends Model
{
    protected $table = 'claim';

    protected $primaryKey = 'claim_id';

    protected $fillable = [
        'storage_location',
        'retriever_id',
        'report_id',		
        'date_retrieved',
    ];

     public function report(){
        return $this->belongsTo(Report::class, 'report_id');
    }

    public function retriever(){
        return $this->belongsTo(retriever::class, 'retriever_id');
    }

    
}
