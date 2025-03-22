<?php

// routes/web.php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\SolutionController;
use App\Http\Controllers\VacancyController;
use App\Http\Controllers\ContactRequestController;

// Главная страница
Route::get('/', function () {
    return view('pages.index', ['title' => 'Главная страница']);
})->name('home');

// Страницы
Route::get('/neft', function () {
    return view('pages.neft', ['title' => 'Автоматизация нефтяной промышленности']);
})->name('neft');

Route::get('/food-industry', function () {
    return view('pages.food-industry', ['title' => 'Автоматизация пищевой промышленности']);
})->name('food-industry');

Route::get('/news', function () {
    return view('pages.news', ['title' => 'Новости в сфере автоматизации']);
})->name('news');

// Магазин (решения АСУ ТП)
Route::get('/shop', [SolutionController::class, 'index'])->name('shop');

// Вакансии
Route::get('/career', [VacancyController::class, 'index'])->name('career');

// Авторизация и регистрация
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
    Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
    Route::post('/register', [AuthController::class, 'register']);
});

// Выход из системы
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Группа маршрутов, доступных только авторизованным пользователям
Route::middleware('auth')->group(function () {
    // Вакансии
    Route::post('/vacancies/{vacancy}/apply', [VacancyController::class, 'apply'])->name('vacancies.apply');

    // Обращения
    Route::get('/solutions/{solution}/contact', [ContactRequestController::class, 'create'])->name('contact_requests.create');
    Route::post('/solutions/{solution}/contact', [ContactRequestController::class, 'store'])->name('contact_requests.store');

    // Заказы
    Route::get('/order/{solution}', [OrderController::class, 'showOrderForm'])->name('order.form');
    Route::post('/order/{solution}', [OrderController::class, 'submitOrder'])->name('order.submit');
});
