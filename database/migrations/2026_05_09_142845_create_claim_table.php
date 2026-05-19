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
        Schema::create('claim', function (Blueprint $table) {
            $table->id('claim_id');
            $table->string('storage_location');

            $table->unsignedBigInteger('retriever_id');
            $table->foreign('retriever_id')
            ->references('retriever_id')
            ->on('retriever')
            ->onDelete('cascade');

            $table->unsignedBigInteger('report_id');
            $table->foreign('report_id')
            ->references('report_id')
            ->on('report')
            ->onDelete('cascade');

            $table->date('date_retrieved');

            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('claim');
    }
};
