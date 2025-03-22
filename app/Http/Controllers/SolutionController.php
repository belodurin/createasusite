<?php

// app/Http/Controllers/SolutionController.php
namespace App\Http\Controllers;

use App\Models\Solution;
use Illuminate\Http\Request;

class SolutionController extends Controller
{
    public function index()
    {
        $solutions = Solution::all();
        return view('solutions.shop', compact('solutions'));
    }
}
