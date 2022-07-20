<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicines', function (Blueprint $table) {
            $table->id();
            // $table->integer('patient_id')->unsigned();
            // $table->foreign('patient_id')->references('id')->on('patient')->onDelete('cascade');
            $table->foreignId('diagnosis_id')->constrained('diagnosis')->onDelete('set null');
            $table->foreignId('patient_id')->constrained('patient')->onDelete('set null');
            // $table->foreignId('patient_id')->nullable()->constrained('patient')->onDelete('set null');
            // $table->integer('diagnosis_id')->unsigned();
            // $table->foreign('diagnosis_id')->references('id')->on('diagnosis')->onDelete('cascade');
            $table->string('brandName');
            $table->text('companyName')->nullable();
            $table->text('strength')->nullable();
            $table->string('discription');
            $table->string('period');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('medicines');
    }
}
