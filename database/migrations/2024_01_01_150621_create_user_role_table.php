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
        Schema::create('user_role', function (Blueprint $table) {
           
            $table->id('Id');
            $table->integer('UserId')->unsigned()->notNullable();
            $table->integer('RoleId')->unsigned()->notNullable();
            $table->dateTime('AddOn');



            $table->foreign('UserId')->reference('id')->inTable('user')->onDelete('CASCADE');
            $table->foreign('RoleId')->references('RoleId')->inTable('role')->onDelete('CASCADE');




        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_role');
    }
};
