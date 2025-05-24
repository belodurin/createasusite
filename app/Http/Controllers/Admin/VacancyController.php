<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Vacancy;
use Illuminate\Http\Request;

class VacancyController extends Controller
{
    public function index()
    {
        $vacancies = Vacancy::orderBy('created_at', 'desc')->get();
        return view('admin.vacancies.index', compact('vacancies'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'requirements' => 'required|string',
            'location' => 'required|string',
            'salary' => 'nullable|numeric',
        ]);

        try {
            $vacancy = Vacancy::create($validated);
            return response()->json([
                'success' => true,
                'vacancy' => $vacancy,
                'message' => 'Вакансия успешно создана'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Ошибка: ' . $e->getMessage()
            ], 500);
        }
    }

    public function show(Vacancy $vacancy)
    {
        return response()->json($vacancy);
    }

    public function update(Request $request, Vacancy $vacancy)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'requirements' => 'required|string',
            'location' => 'required|string',
            'salary' => 'nullable|numeric',
        ]);

        try {
            $vacancy->update($validated);
            return response()->json([
                'success' => true,
                'vacancy' => $vacancy,
                'message' => 'Вакансия успешно обновлена'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Ошибка: ' . $e->getMessage()
            ], 500);
        }
    }

    public function destroy(Vacancy $vacancy)
    {
        try {
            $vacancy->delete();
            return response()->json([
                'success' => true,
                'message' => 'Вакансия успешно удалена'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Ошибка: ' . $e->getMessage()
            ], 500);
        }
    }
}
