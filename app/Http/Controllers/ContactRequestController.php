<?php

namespace App\Http\Controllers;

use App\Models\ContactRequest;
use App\Models\Solution;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ContactRequestController extends Controller
{
    /**
     * Отображение формы для создания запроса.
     *
     * @param Solution $solution Решение, для которого создается запрос.
     * @return \Illuminate\View\View
     */
    public function create(Solution $solution)
    {
        return view('contact_requests.contact', compact('solution'));
    }

    /**
     * Сохранение запроса в базу данных.
     *
     * @param Request $request Данные запроса.
     * @param Solution $solution Решение, для которого создается запрос.
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request, Solution $solution)
    {
        // Валидация данных
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'message' => 'required|string',
        ]);

        try {
            // Создание записи в таблице contact_requests
            $solution->contactRequests()->create($validatedData);

            // Перенаправление с сообщением об успехе
            return redirect()->route('shop')->with('success', 'Ваш запрос успешно отправлен.');
        } catch (\Exception $e) {
            // Логирование ошибки
            Log::error('Ошибка при создании запроса: ' . $e->getMessage());

            // Перенаправление с сообщением об ошибке
            return redirect()->back()->with('error', 'Произошла ошибка при отправке запроса. Пожалуйста, попробуйте снова.');
        }
    }
}
