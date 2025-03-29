<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\SolutionController;
use App\Http\Controllers\VacancyController;
use App\Http\Controllers\ContactRequestController;
use App\Http\Controllers\AutomationController;
use App\Http\Controllers\NewsController;


Route::get('/', function () {
    return view('pages.index', ['title' => 'Главная страница']);
})->name('home');


Route::get('/neft', function () {
    return view('pages.neft', ['title' => 'Автоматизация нефтяной промышленности']);
})->name('neft');

Route::get('/food-industry', function () {
    return view('pages.food-industry', ['title' => 'Автоматизация пищевой промышленности']);
})->name('food-industry');



Route::get('/shop', [SolutionController::class, 'index'])->name('shop');


Route::get('/career', [VacancyController::class, 'index'])->name('career');


Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
    Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
    Route::post('/register', [AuthController::class, 'register']);
});


Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function () {

    Route::post('/vacancies/{vacancy}/apply', [VacancyController::class, 'apply'])->name('vacancies.apply');


    Route::get('/solutions/{solution}/contact', [ContactRequestController::class, 'create'])->name('contact_requests.create');
    Route::post('/solutions/{solution}/contact', [ContactRequestController::class, 'store'])->name('contact_requests.store');


    Route::get('/order/{solution}', [OrderController::class, 'showOrderForm'])->name('order.form');
    Route::post('/order/{solution}', [OrderController::class, 'submitOrder'])->name('order.submit');
});


Route::get('/energy-systems', [AutomationController::class, 'energySystems'])->name('energy');
Route::get('/distributed-automation', [AutomationController::class, 'distributedAutomation'])->name('distributed');
Route::get('/robotic-lines', [AutomationController::class, 'roboticLines'])->name('robotic');
Route::get('/intelligent-systems', [AutomationController::class, 'intelligentSystems'])->name('intelligent');






Route::get('/news', [NewsController::class, 'index'])->name('news.index');
Route::get('/news/ai-robots', [NewsController::class, 'aiRobots'])->name('news.ai-robots');
Route::get('/news/rosatom-network', [NewsController::class, 'rosatomNetwork'])->name('news.rosatom-network');
Route::get('/news/genesys-pc', [NewsController::class, 'genesysPc'])->name('news.genesys-pc');
Route::get('/news/agriculture', [NewsController::class, 'agriculture'])->name('news.agriculture');
Route::get('/news/delivery-robots', [NewsController::class, 'deliveryRobots'])->name('news.delivery-robots');
Route::get('/news/ai-medicine', [NewsController::class, 'aiMedicine'])->name('news.ai-medicine');
Route::get('/news/warehouse-automation', [NewsController::class, 'warehouseAutomation'])->name('news.warehouse-automation');
Route::get('/news/self-driving-cars', [NewsController::class, 'selfDrivingCars'])->name('news.self-driving-cars');
