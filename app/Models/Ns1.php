<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ns1 extends Model
{
    use HasFactory;
    // protected $table = 'ns1';
    protected $fillable = [
        'titre',
        'video',
        'objectif',
      
    ];
}
