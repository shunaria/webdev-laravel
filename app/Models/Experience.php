<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    use HasFactory;

    protected $table = 'experiences';  // Add this if you want to be explicit
    
    // attributes used by the factory and migration
    protected $fillable = [
        'Judul',
        'Isi',
    ];
}