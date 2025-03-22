<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Создание таблицы contact_requests.
     */
    public function up(): void
    {
        Schema::create('contact_requests', function (Blueprint $table) {
            $table->id(); // Первичный ключ
            $table->string('name'); // Имя пользователя
            $table->string('email'); // Email пользователя
            $table->text('message'); // Сообщение
            $table->foreignId('solution_id')->constrained()->onDelete('cascade'); // Внешний ключ для связи с таблицей solutions
            $table->timestamps(); // created_at и updated_at
        });
    }

    /**
     * Удаление таблицы contact_requests.
     */
    public function down(): void
    {
        Schema::dropIfExists('contact_requests');
    }
};
