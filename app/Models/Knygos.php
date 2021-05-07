<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Knygos extends Model
{
    use HasFactory;

    protected $table = 'knygos';
    protected $fillable = [
        'pavadinimas',
        'tekstas',
        'nuotrauka'
    ];
}
