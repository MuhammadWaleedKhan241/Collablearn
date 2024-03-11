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
        Schema::create('enrollments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('Session_Id');
            $table->unsignedBigInteger('Student_Id');
            $table->timestamp('Enroll_On');
            
            $table->foreign('Student_Id')->references('id')->on('users')->onDelete('cascade ');
            $table->foreign('Session_Id')->references('id')->on('session')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('enrollment');
    }
};