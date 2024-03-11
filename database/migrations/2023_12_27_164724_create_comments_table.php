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
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->integer('UserId')->unsigned()->Nullable();
            $table->integer('CaseStudyId')->unsigned()->Nullable();
            $table->string('comment')->nullable();
            $table->dateTime('AddedOn')->ullable();


//$table->foreign('UserId')->references('id')->on('users')->onDelete('CASCADE');
            $table->foreign('CaseStudyId')->references('id')->on('case_studies')->onDelete('CASCADE');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comments');
    }
};