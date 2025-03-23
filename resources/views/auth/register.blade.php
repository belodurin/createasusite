@extends('layout.app1')

@section('title', 'Регистрация')

@section('content')
<div class="auth-container">
    <div class="auth-form">
        <h1 class="auth-title">Регистрация</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('register') }}" class="auth-form-content">
            @csrf
            <div class="form-group">
                <label for="name" class="form-label">Имя:</label>
                <input type="text" name="name" id="name" required
                       class="form-input @error('name') is-invalid @enderror"
                       placeholder="Введите ваше имя"
                       value="{{ old('name') }}">
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="email" class="form-label">Email:</label>
                <input type="email" name="email" id="email" required
                       class="form-input @error('email') is-invalid @enderror"
                       placeholder="Введите ваш email"
                       value="{{ old('email') }}">
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="password" class="form-label">Пароль:</label>
                <input type="password" name="password" id="password" required
                       class="form-input @error('password') is-invalid @enderror"
                       placeholder="Введите ваш пароль">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="password_confirmation" class="form-label">Подтверждение пароля:</label>
                <input type="password" name="password_confirmation" id="password_confirmation" required
                       class="form-input"
                       placeholder="Подтвердите ваш пароль">
            </div>
            <button type="submit" class="form-button">
                Зарегистрироваться
            </button>
        </form>
        <p class="auth-link">Уже есть аккаунт? <a href="{{ route('login') }}">Войти</a></p>
    </div>
</div>
@endsection
