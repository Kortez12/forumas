<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Muzika extends Model
{
    use HasFactory;
    protected $table = 'muzika';

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
