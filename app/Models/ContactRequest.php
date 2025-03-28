<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactRequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'message',
        'solution_id',
    ];


    public function solution()
    {
        return $this->belongsTo(Solution::class);
    }
}
