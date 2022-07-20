<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Doctor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctor', function (Blueprint $table) {
            $table->id();
            // $table->string('name');
            // $table->string('email')->unique();
            $table->foreignId('user_id')->nullable()->constrained('users')->onDelete('set null');
            $table->text('info')->nullable();
            $table->char('phone','20');
            // $table->date('birthDate');
            // $table->enum('gender',['male','female']);
            // $table->char('cardID','20')->unique();   //l8tha
            // $table->char('nationalID','14')->unique();
            // $table->string('department');
            // $table->string('specialty');
            $table->foreignId('department_id')->nullable()->constrained('departments')->onDelete('set null');
            // $table->integer('department_id')->unsigned();
            // $table->foreign('department_id')->references('id')->on('departments')->onDelete('cascade');
            $table->char('price','100')->nullable();
            $table->char('workFrom','50')->nullable();
            $table->char('workTo','50')->nullable();
            $table->text('address')->nullable();
            $table->string('skill')->nullable();
            $table->string('c')->nullable();
            $table->string('serviceBody')->nullable();
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
        Schema::dropIfExists('doctor');
    }
}
