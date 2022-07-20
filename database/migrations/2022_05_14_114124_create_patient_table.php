<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient', function (Blueprint $table) {
            $table->id();
            // $table->string('name');
            // $table->string('email')->unique();
            $table->foreignId('user_id')->nullable()->constrained('users')->onDelete('set null');
            $table->char('phone','20')->nullable();
            // $table->date('birthDate');
            // $table->enum('gender',['male','female']);
            // $table->char('nationalID','14')->unique();
            $table->text('address')->nullable();
            $table->string('bloodType','3')->nullable();
            $table->char('height','10')->nullable();
            $table->char('weight','10')->nullable();
            $table->char('job','100')->nullable();
            $table->String('socialStatus')->nullable();
            $table->string('allergicList')->nullable();
            $table->String('bloodPressure')->nullable();
            $table->String('bloodOxygen')->nullable();
            $table->String('bodyTemperature')->nullable();
            $table->String('bloodGlucose')->nullable();
            $table->string('chronicDiseases')->nullable();
            $table->string('possibleGeneticD')->nullable();
            $table->string('habbits')->nullable();
            $table->string('relativesName')->nullable();
            $table->string('relativesPhone')->nullable();
            $table->string('photo')->nullable();
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
        Schema::dropIfExists('patient');
    }
}
