@extends('layout.app')

@section('title', 'Админ панель - Решения')

@section('content')
<div class="container">
    <h1>Управление решениями</h1>

    <!-- Форма для создания/редактирования -->
    <div class="card mb-4">
        <div class="card-header">
            <h2 id="formTitle">Добавить новое решение</h2>
        </div>
        <div class="card-body">
            <form id="solutionForm" enctype="multipart/form-data">
                @csrf
                <input type="hidden" id="solutionId" name="id">

                <div class="mb-3">
                    <label for="name" class="form-label">Название</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Описание</label>
                    <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
                </div>

                <div class="mb-3">
                    <label for="price" class="form-label">Цена</label>
                    <input type="number" class="form-control" id="price" name="price" required>
                </div>

                <div class="mb-3">
                    <label for="image" class="form-label">Изображение</label>
                    <input type="file" class="form-control" id="image" name="image" accept="image/*">
                    <div id="imagePreview" class="mt-2"></div>
                </div>

                <button type="submit" id="submitBtn" class="btn btn-primary">Создать</button>
                <button type="button" id="cancelBtn" class="btn btn-secondary" style="display:none;">Отменить</button>
            </form>
        </div>
    </div>

    <!-- Таблица решений -->
    <div class="card">
        <div class="card-header">
            <h2>Список решений</h2>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Изображение</th>
                            <th>Название</th>
                            <th>Цена</th>
                            <th>Действия</th>
                        </tr>
                    </thead>
                    <tbody id="solutionsTable">
                        @foreach($solutions as $solution)
                        <tr id="solution-{{ $solution->id }}">
                            <td>{{ $solution->id }}</td>
                            <td><img src="{{ asset('storage/' . $solution->image) }}" alt="{{ $solution->name }}" style="max-width: 60px;"></td>
                            <td>{{ $solution->name }}</td>
                            <td>{{ number_format($solution->price, 0, ',', ' ') }} руб.</td>
                            <td>
                                <button onclick="editSolution({{ $solution->id }})" class="btn btn-sm btn-warning">Редактировать</button>
                                <button onclick="deleteSolution({{ $solution->id }})" class="btn btn-sm btn-danger">Удалить</button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script>
    // Глобальные переменные
    let isEditMode = false;
    let currentSolutionId = null;

    // Инициализация при загрузке страницы
    document.addEventListener('DOMContentLoaded', function() {
        // Обработка отправки формы
        document.getElementById('solutionForm').addEventListener('submit', handleFormSubmit);

        // Обработка отмены редактирования
        document.getElementById('cancelBtn').addEventListener('click', resetForm);

        // Обработка изменения изображения
        document.getElementById('image').addEventListener('change', updateImagePreview);
    });

    // Обновление превью изображения
    function updateImagePreview(e) {
        const file = e.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(event) {
                document.getElementById('imagePreview').innerHTML = `
                    <img src="${event.target.result}" style="max-width: 200px; max-height: 200px;" class="img-thumbnail">
                `;
            };
            reader.readAsDataURL(file);
        }
    }

    // Обработка отправки формы
    async function handleFormSubmit(e) {
        e.preventDefault();

        const form = e.target;
        const formData = new FormData(form);
        const url = isEditMode
            ? `/admin/solutions/${currentSolutionId}`
            : '/admin/solutions';

        const method = isEditMode ? 'PUT' : 'POST';

        try {
            const response = await fetch(url, {
                method: method,
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                    'Accept': 'application/json',
                },
                body: formData
            });

            const data = await response.json();

            if (!response.ok) {
                throw new Error(data.message || 'Ошибка сервера');
            }

            if (data.success) {
                alert(data.message);
                resetForm();
                if (isEditMode) {
                    updateSolutionRow(data.solution);
                } else {
                    addSolutionRow(data.solution);
                }
            }
        } catch (error) {
            console.error('Ошибка:', error);
            alert(`Ошибка: ${error.message}`);
        }
    }

    // Редактирование решения
    async function editSolution(id) {
        try {
            const response = await fetch(`/admin/solutions/${id}`);
            if (!response.ok) {
                throw new Error('Ошибка загрузки данных');
            }

            const solution = await response.json();

            // Заполняем форму
            document.getElementById('solutionId').value = solution.id;
            document.getElementById('name').value = solution.name;
            document.getElementById('description').value = solution.description;
            document.getElementById('price').value = solution.price;

            // Показываем текущее изображение
            if (solution.image) {
                document.getElementById('imagePreview').innerHTML = `
                    <img src="/storage/${solution.image}" style="max-width: 200px; max-height: 200px;" class="img-thumbnail">
                    <div class="text-muted mt-1">Текущее изображение</div>
                `;
            }

            // Переключаем в режим редактирования
            isEditMode = true;
            currentSolutionId = solution.id;
            document.getElementById('formTitle').textContent = 'Редактировать решение';
            document.getElementById('submitBtn').textContent = 'Обновить';
            document.getElementById('cancelBtn').style.display = 'inline-block';

            // Прокрутка к форме
            document.getElementById('solutionForm').scrollIntoView({ behavior: 'smooth' });

        } catch (error) {
            console.error('Ошибка:', error);
            alert(`Ошибка при загрузке решения: ${error.message}`);
        }
    }

    // Удаление решения
    async function deleteSolution(id) {
        if (!confirm('Вы уверены, что хотите удалить это решение?')) return;

        try {
            const response = await fetch(`/admin/solutions/${id}`, {
                method: 'DELETE',
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                    'Accept': 'application/json',
                }
            });

            const data = await response.json();

            if (!response.ok) {
                throw new Error(data.message || 'Ошибка сервера');
            }

            if (data.success) {
                alert(data.message);
                document.getElementById(`solution-${id}`).remove();
            }
        } catch (error) {
            console.error('Ошибка:', error);
            alert(`Ошибка при удалении: ${error.message}`);
        }
    }

    // Сброс формы
    function resetForm() {
        document.getElementById('solutionForm').reset();
        document.getElementById('solutionId').value = '';
        document.getElementById('imagePreview').innerHTML = '';
        isEditMode = false;
        currentSolutionId = null;
        document.getElementById('formTitle').textContent = 'Добавить новое решение';
        document.getElementById('submitBtn').textContent = 'Создать';
        document.getElementById('cancelBtn').style.display = 'none';
    }

    // Добавление новой строки в таблицу
    function addSolutionRow(solution) {
        const row = document.createElement('tr');
        row.id = `solution-${solution.id}`;
        row.innerHTML = `
            <td>${solution.id}</td>
            <td><img src="/storage/${solution.image}" style="max-width: 60px;"></td>
            <td>${solution.name}</td>
            <td>${solution.price ? new Intl.NumberFormat('ru-RU').format(solution.price) + ' руб.' : 'Не указана'}</td>
            <td>
                <button onclick="editSolution(${solution.id})" class="btn btn-sm btn-warning">Редактировать</button>
                <button onclick="deleteSolution(${solution.id})" class="btn btn-sm btn-danger">Удалить</button>
            </td>
        `;
        document.getElementById('solutionsTable').prepend(row);
    }

    // Обновление строки в таблице
    function updateSolutionRow(solution) {
        const row = document.getElementById(`solution-${solution.id}`);
        if (row) {
            row.innerHTML = `
                <td>${solution.id}</td>
                <td><img src="/storage/${solution.image}" style="max-width: 60px;"></td>
                <td>${solution.name}</td>
                <td>${solution.price ? new Intl.NumberFormat('ru-RU').format(solution.price) + ' руб.' : 'Не указана'}</td>
                <td>
                    <button onclick="editSolution(${solution.id})" class="btn btn-sm btn-warning">Редактировать</button>
                    <button onclick="deleteSolution(${solution.id})" class="btn btn-sm btn-danger">Удалить</button>
                </td>
            `;
        }
    }
</script>

<style>
    /* Общие стили контейнера */
    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 20px;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    /* Заголовки */
    h1 {
        color: #2c3e50;
        margin-bottom: 25px;
        font-size: 24px;
        font-weight: 600;
    }

    /* Карточки */
    .card {


        border-radius: 5px;

        margin-bottom: 20px;
    }

    .card-header {
        padding: 15px;
        background-color: #f8f9fa;
        border-bottom: 1px solid #dee2e6;
    }

    .card-body {
        padding: 20px;
    }

    /* Формы */
    .mb-3 {
        margin-bottom: 1rem;
    }

    .form-label {
        display: block;
        margin-bottom: 8px;
        font-weight: 500;
        color: #495057;
    }

    .form-control {
        display: block;
        width: 100%;
        padding: 10px 12px;
        font-size: 14px;
        line-height: 1.5;
        color: #495057;
        background-color: #fff;
        background-clip: padding-box;
        border: 1px solid #ced4da;
        border-radius: 4px;
        transition: border-color 0.15s ease-in-out;
    }

    .form-control:focus {
        border-color: #80bdff;
        outline: 0;
        box-shadow: 0 0 0 0.2rem rgba(0,123,255,.25);
    }

    textarea.form-control {
        min-height: 120px;
        resize: vertical;
    }

    /* Кнопки */
    .btn {
        display: inline-block;
        font-weight: 400;
        text-align: center;
        white-space: nowrap;
        vertical-align: middle;
        user-select: none;
        border: 1px solid transparent;
        padding: 8px 16px;
        font-size: 14px;
        line-height: 1.5;
        border-radius: 4px;
        transition: all 0.3s;
        cursor: pointer;
    }

    .btn-primary {
        color: #fff;
        background-color: #007bff;
        border-color: #007bff;
    }

    .btn-primary:hover {
        background-color: #0069d9;
        border-color: #0062cc;
    }

    .btn-secondary {
        color: #fff;
        background-color: #6c757d;
        border-color: #6c757d;
    }

    .btn-secondary:hover {
        background-color: #5a6268;
        border-color: #545b62;
    }

    .btn-warning {
        color: #212529;
        background-color: #ffc107;
        border-color: #ffc107;
    }

    .btn-warning:hover {
        background-color: #e0a800;
        border-color: #d39e00;
    }

    .btn-danger {
        color: #fff;
        background-color: #dc3545;
        border-color: #dc3545;
    }

    .btn-danger:hover {
        background-color: #c82333;
        border-color: #bd2130;
    }

    .btn-sm {
        padding: 5px 10px;
        font-size: 12px;
    }

    /* Таблицы */
    .table {
        width: 100%;
        margin-bottom: 1rem;
        color: #212529;
        border-collapse: collapse;
    }

    .table th,
    .table td {
        padding: 12px;
        vertical-align: middle;
        border-top: 1px solid #dee2e6;
    }

    .table thead th {
        vertical-align: bottom;
        border-bottom: 2px solid #dee2e6;
        background-color: #f8f9fa;
        font-weight: 600;
    }

    .table-striped tbody tr:nth-of-type(odd) {
        background-color: rgba(0,0,0,.05);
    }

    .table-responsive {
        display: block;
        width: 100%;
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
    }

    /* Изображения */
    .img-thumbnail {
        padding: 0.25rem;
        background-color: #fff;
        border: 1px solid #dee2e6;
        border-radius: 0.25rem;
        max-width: 100%;
        height: auto;
    }

    .text-muted {
        color: #6c757d !important;
        font-size: 0.875em;
    }

    .mt-1 {
        margin-top: 0.25rem !important;
    }

    .mt-2 {
        margin-top: 0.5rem !important;
    }

    /* Адаптивность */
    @media (max-width: 768px) {
        .container {
            padding: 15px;
        }
    }
</style>
@endsection
