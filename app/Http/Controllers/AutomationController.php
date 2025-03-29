<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AutomationController extends Controller
{
    public function energySystems()
    {
        return view('pages.energy', [
            'title' => 'Автоматизированные системы энергетики'
        ]);
    }

    public function distributedAutomation()
    {
        return view('pages.distributed', [
            'title' => 'Распределенная автоматизация'
        ]);
    }

    public function roboticLines()
    {
        return view('pages.robotic', [
            'title' => 'Роботизированные линии'
        ]);
    }

    public function intelligentSystems()
    {
        return view('pages.intelligent', [
            'title' => 'Интеллектуальные системы'
        ]);
    }
}
