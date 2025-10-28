<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('nama_models', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('Judul');
            $table->text('Isi');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('nama_models');
    }
};