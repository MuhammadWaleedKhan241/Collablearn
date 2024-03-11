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
        Schema::create('resources', function (Blueprint $table) {
            $table->id();
            $table->bigIntegerigInteger('SessionId');
            $table->string('File_Title');
            $table->string('File_Name');
            $table->string('Path');
            $table->timestamp('added_on');
            $table->timestamp();

            $table->foreign('SessionId')->references('id')->on('session')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('resources');
    }
};