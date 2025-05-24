<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vacancy extends Model
{
    protected $fillable = [
        'title',
        'description',
        'requirements',
        'location',
        'salary',
        'created_at',
        'updated_at'
    ];

    protected $dates = ['created_at', 'updated_at'];
}
