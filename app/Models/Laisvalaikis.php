<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laisvalaikis extends Model
{
    use HasFactory;

    protected $table = 'laisvalaikis';
    protected $fillable = [
        'pavadinimas',
        'tekstas',
        'nuotrauka'
    ];
}
