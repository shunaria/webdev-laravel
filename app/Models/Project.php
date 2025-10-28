<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $table = 'projects';  // Add this if you want to be explicit
    
    protected $fillable = [
        'judul',
        'tanggal mulai',
        'tanggal selesai',
        'informasi'
    ];
}