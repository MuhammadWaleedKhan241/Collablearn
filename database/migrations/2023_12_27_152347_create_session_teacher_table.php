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
        Schema::create('session_teacher', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('TeacherID')->unsigned();
        $table->unsignedBigInteger('SessionId')->unsigned();
        $table->timestamp('AddedOn')->nullable();

        // $table->foreign('TeacherID')->references('id')->on('teachers')->onDelete('cascade');
        // $table->foreign('SessionId')->references('id')->on('sessions')->onDelete('cascade');


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('session_teacher');
    }
};