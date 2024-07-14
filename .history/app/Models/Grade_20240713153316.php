<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    use HasFactory;
    use Spatie\Translatable\;

    protected $fillable = [
        'Name', 'Notes'
    ];

}

