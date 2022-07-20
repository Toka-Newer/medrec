<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Diagnosis extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diagnosis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('patient_id')->nullable()->constrained('patient')->onDelete('set null');
            // $table->integer('patient_id')->unsigned();
            // $table->foreign('patient_id')->references('id')->on('patient')->onDelete('cascade');
            $table->foreignId('doctor_id')->nullable()->constrained('doctor')->onDelete('set null');
            // $table->integer('doctor_id')->unsigned();
            // $table->foreign('doctor_id')->references('id')->on('doctor')->onDelete('cascade');
            $table->string('disease_title');
            $table->text('diagnosis');
            // $table->string('xrya')->nullable();
            $table->text('doctor_notes')->nullable();
            $table->text('patient_notes')->nullable();
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
        Schema::dropIfExists('diagnosis');
    }
}
