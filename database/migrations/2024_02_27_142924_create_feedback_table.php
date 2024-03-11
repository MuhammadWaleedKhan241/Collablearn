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
            $table->unsignedBigInteger('User_id')->default(0);
            $table->enum('gender',['Male','Female']);
            $table->string('Age');
            $table->string('Experience')->nullable();
            $table->string('EducationYear')->nullable();
            $table->text('SectorExperiance')->nullable(); 
            $table->string('GeoLocation')->nullable();
            $table->string('UseExpBefore')->nullable();
            $table->string('Usefull')->nullable();
            $table->string('OwnBackExpUnderstandingStratMang')->nullable();
            $table->string('UnderstandingSM')->nullable();
            $table->text('ExplnyourLearn')->nullable();
            $table->text('BackExpInClass')->nullable();
            $table->text('LearnFromOther')->nullable();
            $table->text('ImprovedInFuture')->nullable();
            $table->text('AnyOtherComment')->nullable();
            $table->boolean('Permission')->default(false);
            $table->timestamps();
            
            $table->foreign('User_id')->references('id')->on('users')->onDelete('cascade');
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