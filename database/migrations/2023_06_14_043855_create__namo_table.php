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
        Schema::create('namo', function (Blueprint $table) {
            $table->id();
            $table->string('Username');
            $table->string('Password');
            $table->string('Email');
            $table->string('Mobile');
             $table->string('Gender');
            $table->string('City');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('namo');
    }
};
