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
        Schema::create('case_studies', function (Blueprint $table) {
            $table->id();
            $table->integer('SessionId')->unsigned()->Nullable();
            $table->integer('UserId')->Nullable()->unsigned();
            $table->string('Title')->Nullable();
            $table->string('Sector')->Nullable();
            $table->string('CountryName')->Nullable();
            $table->string('CountryValue')->Nullable();
            $table->string('ModelAndFrameworkCoverd')->Nullable();
            $table->string('FileName')->Nullable();
            $table->string('AttachFile')->Nullable();
            $table->string('SubmittedOn')->Nullable();


            // $table->foreign('UserId')->references('id')->on('users')->onDelete('CASCADE');
            // $table->foreign('SessionId')->references('id')->on('sessions')->onDelete('CASCADE');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('case_studies');
    }
};