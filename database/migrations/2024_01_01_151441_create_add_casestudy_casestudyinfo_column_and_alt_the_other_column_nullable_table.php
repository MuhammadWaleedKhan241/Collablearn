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
        Schema::create('add_casestudy_casestudyinfo_column_and_alt_the_other_column_nullable', function (Blueprint $table) {
        $table->string("Sector")->nullable()->alter();
        $table->string("CountryName")->nullable()->alter();
        $table->string("CountryValue")->nullable()->alter();
        $table->string("ModelAndFramworkCoverd")->nullable()->alter();
        $table->json("CaseStudyinfo")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {   
        Schema::dropIfExists('add_casestudy_casestudyinfo_column_and_alt_the_other_column_nullable');
    }
};
