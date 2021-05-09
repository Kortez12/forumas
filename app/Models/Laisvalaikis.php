<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laisvalaikis extends Model
{
    use HasFactory;

    protected $table = 'laisvalaikis';

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
