<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('faculties', function (Blueprint $table) {
            $table->id();
            $table->string('name_id'); // Nama dalam Bahasa Indonesia
            $table->string('name_en')->nullable(); // Nama dalam Bahasa Inggris
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('faculties');
    }
};