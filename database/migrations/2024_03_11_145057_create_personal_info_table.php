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
        Schema::create('personal_info', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('User_Id');
        $table->string('Email');
        $table->string('UserName');
        $table->string('FirstName');
        $table->string('LastName');
        $table->string('RollNo')->nullable();
        $table->unsignedBigInteger('Session_Id')->nullable();
        $table->string('Education')->nullable();
        $table->string('Specialization')->nullable();
        $table->date('DateofBirth');
        $table->string('Gender');
        $table->string('DateofJoining')->nullable();
        $table->string('Address1');
        $table->string('Address2')->nullable();
        $table->string('City');
        $table->string('State');
        $table->string('ZipCode');
        $table->string('CountryName');
        $table->string('CountryValue');
        $table->date('AddedOn')->defaultTo();
        $table->date('LastUpdateOn')->defaultTo();


        $table->foreign('User_Id')->references('id')->on('users')->onDelete('cascade');
        $table->foreign('Session_Id')->references('id')->on('session')->onDelete('SET NULL');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personal_info');
    }
};