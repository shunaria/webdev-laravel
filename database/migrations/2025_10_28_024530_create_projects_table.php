<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('projects', function (Blueprint $table) {  // Changed from 'Project' to 'projects'
            $table->id();
            $table->timestamps();
            $table->string('judul');  // Changed to lowercase to match factory
            $table->date('tanggal mulai');
            $table->date('tanggal selesai');
            $table->text('informasi');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('projects');  // Changed from 'Project' to 'projects'
    }
};