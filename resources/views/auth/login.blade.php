@extends('layout.app1')

@section('title', 'Авторизация')

@section('content')
<div class="auth-container">
    <div class="auth-form">
        <h1 class="auth-title">Вход</h1>
        <form method="POST" action="{{ route('login') }}" class="auth-form-content">
            @csrf
            <div class="form-group">
                <label for="email" class="form-label">Email:</label>
                <input type="email" name="email" id="email" required
                       class="form-input"
                       placeholder="Введите ваш email">
            </div>
            <div class="form-group">
                <label for="password" class="form-label">Пароль:</label>
                <input type="password" name="password" id="password" required
                       class="form-input"
                       placeholder="Введите ваш пароль">
            </div>
            <button type="submit" class="form-button">
                Войти
            </button>
        </form>
        <p class="auth-link">
            Нет аккаунта? <a href="{{ route('register') }}">Зарегистрироваться</a>
        </p>
    </div>
</div>
@endsection
