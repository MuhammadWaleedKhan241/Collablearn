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
        Schema::create('user', function (Blueprint $table) {
        $table->id('id');
        $table->string('Email')->notNullable()->unique();
        $table->string('UserName')->notNullable()->unique();
        $table->string('Password')->notNullable();
        $table->boolean('Active')->notNullable()->defaultTo(false);
        $table->string('LastLogInIp');
        $table->string('DisplayPic');

        $table->timestamp('CreateDate');
    
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user');
    }
};