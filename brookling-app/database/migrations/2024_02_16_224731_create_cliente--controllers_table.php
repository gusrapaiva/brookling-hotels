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
        Schema::create('cliente--controllers', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('email');
            $table->string('fone');
            $table->timestamps();
        });
    }

    // criar model, controller, migration-
    // php artisan make: model [nome] --controller -migration
    
    // php artisan migrate
    // php artisan migrate:fresh


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cliente--controllers');
    }
};
