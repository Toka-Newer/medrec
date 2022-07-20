<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSurgeriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surgeries', function (Blueprint $table) {
            $table->id();
            $table->foreignId('doctor_id')->nullable()->constrained('doctor')->onDelete('set null');
            // $table->integer('doctor_id')->unsigned();
            // $table->foreign('doctor_id')->references('id')->on('doctor')->onDelete('cascade');
            $table->foreignId('patient_id')->nullable()->constrained('patient')->onDelete('set null');
            // $table->integer('patient_id')->unsigned();
            // $table->foreign('patient_id')->references('id')->on('patient')->onDelete('cascade');
            $table->string('surgeryTitle');
            // $table->date('surgeryDate');
            $table->text('preOperation');
            $table->text('postOperation');
            $table->text('risks');
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
        Schema::dropIfExists('surgeries');
    }
}
