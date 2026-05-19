<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('report', function (Blueprint $table) {
            $table->id('report_id');
            $table->string('item_name'); 
            $table->string('category'); 
            $table->string('description')->nullable(); 
            $table->string('image')->nullable();  
            $table->string('location_found'); 
            $table->date('date_reported');
            $table->enum('status',['found','lost'])->default('lost');
             $table->timestamps();
            });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('report');
    }
};
