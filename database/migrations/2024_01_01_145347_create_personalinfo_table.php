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
        Schema::create('_personalinfo', function (Blueprint $table) {
        $table->id('Id')->primary();
        $table->integer('UserId')->unsigned()->notNullable();
        $table->string('Email')->notNullable();
        $table->string('UserName')->notNullable();
        $table->string('FirstName')->notNullable();
        $table->string('LastName')->notNullable();
        $table->string('RollNo')->nullable();
        $table->integer('SessionId')->unsigned()->nullable();
        $table->string('Education')->nullable();
        $table->string('Specialization')->nullable();
        $table->date('DateofBirth')->notNullable();
        $table->string('Gender')->notNullable();
        $table->string('DateofJoining')->nullable();
        $table->string('Address1')->notNullable();
        $table->string('Address2')->nullable();
        $table->string('City')->notNullable();
        $table->string('State')->notNullable();
        $table->string('ZipCode')->notNullable();
        $table->string('CountryName')->notNullable();
        $table->string('CountryValue')->notNullable();
        $table->date('AddedOn')->defaultTo();
        $table->date('LastUpdateOn')->defaultTo();


        $table->foreign('UserId')->references('Id')->inTable('user')->onDelete('CASCADE');
        $table->foreign('SessionId')->references('SessionId')->inTable('session')->onDelete('SET NULL');

        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_personalinfo');
    }
};
