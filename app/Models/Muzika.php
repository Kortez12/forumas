<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Muzika extends Model
{
    use HasFactory;
    protected $table = 'muzika';
    protected $fillable = [
        'pavadinimas',
        'tekstas',
        'nuotrauka'
    ];
}
