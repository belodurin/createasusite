<?php

namespace App\Http\Controllers;

use App\Models\Vacancy;
use App\Models\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VacancyController extends Controller
{
    /**
     * Отображение списка вакансий.
     */
    public function index()
    {
        $vacancies = Vacancy::all();
        return view('vacancies.career', compact('vacancies'));
    }

    /**
     * Отображение формы создания вакансии.
     */
    public function create()
    {
        return view('vacancies.create');
    }

    /**
     * Сохранение новой вакансии.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'location' => 'required|string',
            'salary' => 'nullable|numeric',
        ]);

        Vacancy::create($request->all());

        return redirect()->route('career')->with('success', 'Вакансия успешно создана.');
    }

    /**
     * Отображение деталей вакансии.
     */
    public function show(Vacancy $vacancy)
    {
        return view('vacancies.show', compact('vacancy'));
    }

    /**
     * Отображение формы редактирования вакансии.
     */
    public function edit(Vacancy $vacancy)
    {
        return view('vacancies.edit', compact('vacancy'));
    }

    /**
     * Обновление вакансии.
     */
    public function update(Request $request, Vacancy $vacancy)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'location' => 'required|string',
            'salary' => 'nullable|numeric',
        ]);

        $vacancy->update($request->all());

        return redirect()->route('career')->with('success', 'Вакансия успешно обновлена.');
    }

    /**
     * Удаление вакансии.
     */
    public function destroy(Vacancy $vacancy)
    {
        $vacancy->delete();
        return redirect()->route('career')->with('success', 'Вакансия успешно удалена.');
    }

    /**
     * Обработка отклика на вакансию.
     */
    public function apply(Vacancy $vacancy, Request $request)
    {
        // Проверяем, авторизован ли пользователь
        if (!Auth::check()) {
            return redirect()->route('login')->with('warning', 'Для отклика на вакансию необходимо зарегистрироваться.');
        }

        // Создаем запись об отклике
        Application::create([
            'user_id' => Auth::id(), // ID авторизованного пользователя
            'vacancy_id' => $vacancy->id, // ID вакансии
            'message' => $request->input('message', ''), // Сообщение (если есть)
        ]);

        return redirect()->back()->with('success', 'Ваш отклик успешно отправлен!');
    }
}
