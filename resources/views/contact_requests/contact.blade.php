@extends('layout.app')

@section('content')
<div class="contact-container">
    <div class="contact-form">
        <h1 class="contact-title">Создать запрос для решения: {{ $solution->name }}</h1>
        <form method="POST" action="{{ route('contact_requests.store', $solution) }}" class="contact-form-content">
            @csrf
            <div class="form-group">
                <label for="name" class="form-label">Имя:</label>
                <input type="text" name="name" id="name" class="form-input" required>
            </div>
            <div class="form-group">
                <label for="email" class="form-label">Email:</label>
                <input type="email" name="email" id="email" class="form-input" required>
            </div>
            <div class="form-group">
                <label for="message" class="form-label">Сообщение:</label>
                <textarea name="message" id="message" class="form-input" required></textarea>
            </div>
            <button type="submit" class="form-button">Отправить</button>
        </form>
    </div>
</div>
@endsection
