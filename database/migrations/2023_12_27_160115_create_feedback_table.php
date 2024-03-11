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
        Schema::create('feedback', function (Blueprint $table) {
            $table->id();
            $table->string('gender')->notNullable();
            $table->string('age')->notNullable();
            $table->string('experience')->notNullable();
            $table->string('educatuionYear')->notNullable();
            $table->string('SectorExperiance')->notNullable();
            $table->string('geoLocation')->notNullable();
            $table->string('UseExpBefore')->notNullable();
            $table->string('Usefull')->notNullable();
            $table->string('OwnBackExpUnderstandingStratMang')->notNullable();
            $table->string('UnderstandingSM')->notNullable();
            $table->string('ExpInYourLearn')->notNullable();
            $table->string('BackExpInClass')->notNullable();
            $table->string('LearnFromOther')->notNullable();
            $table->string('ImprovedInFuture')->notNullable();
            $table->string('AnyOtherComment')->notNullable();
            $table->string('Permission')->notNullable();

            $table->foreign('id')->references('id')->on('users')->onDelete('CASCADE');


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('feedback');
    }
};