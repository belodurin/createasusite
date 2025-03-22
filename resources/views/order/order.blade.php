@extends('layout.app')

@section('title', 'Форма заказа')

@section('content')
<div class="container">
    <h1>Закажите решение для АСУ ТП</h1>
    <form method="POST" action="{{ route('order') }}">
        @csrf
        <div>
            <label for="solution_name">Название решения:</label>
            <input type="text" name="solution_name" id="solution_name" required>
        </div>
        <div>
            <label for="description">Описание:</label>
            <textarea name="description" id="description" required></textarea>
        </div>
        <button type="submit">Отправить заказ</button>
    </form>
</div>
@endsection
