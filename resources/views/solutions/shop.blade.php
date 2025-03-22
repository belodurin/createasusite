@extends('layout.app')

@section('title', 'Каталог решений АСУ ТП')

@section('content')
<div class="catalog-container">
    <h1 class="catalog-title">Каталог решений АСУ ТП</h1>
    <div class="catalog-grid">
        @foreach ($solutions as $solution)
            <div class="catalog-item">
                <div class="catalog-item-image">
                    <img src="{{ asset($solution->image ?? 'images/default.jpg') }}" alt="{{ $solution->name }}">
                </div>
                <div class="catalog-item-content">
                    <h2 class="catalog-item-title">{{ $solution->name }}</h2>
                    <p class="catalog-item-description">
                        {{ $solution->description }}
                    </p>
                    <p><strong>Цена:</strong> {{ number_format($solution->price, 0, ',', ' ') }} руб.</p>
                    <a href="{{ route('contact_requests.create', $solution) }}" class="catalog-item-button">Связаться</a>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
