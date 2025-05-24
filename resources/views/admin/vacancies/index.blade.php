@extends('layout.app')

@section('title', 'Админ панель - Вакансии')

@section('content')
<div class="container">
    <h1>Управление вакансиями</h1>

    <!-- Форма для создания/редактирования -->
    <div class="card mb-4">
        <div class="card-header">
            <h2 id="formTitle">Добавить новую вакансию</h2>
        </div>
        <div class="card-body">
            <form id="vacancyForm">
                @csrf
                <input type="hidden" id="vacancyId" name="id">

                <div class="mb-3">
                    <label for="title" class="form-label">Название</label>
                    <input type="text" class="form-control" id="title" name="title" required>
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Описание</label>
                    <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
                </div>

                <div class="mb-3">
                    <label for="requirements" class="form-label">Требования</label>
                    <textarea class="form-control" id="requirements" name="requirements" rows="3" required></textarea>
                </div>

                <div class="mb-3">
                    <label for="location" class="form-label">Локация</label>
                    <input type="text" class="form-control" id="location" name="location" required>
                </div>

                <div class="mb-3">
                    <label for="salary" class="form-label">Зарплата</label>
                    <input type="number" class="form-control" id="salary" name="salary">
                </div>

                <button type="submit" id="submitBtn" class="btn btn-primary">Создать</button>
                <button type="button" id="cancelBtn" class="btn btn-secondary" style="display:none;">Отменить</button>
            </form>
        </div>
    </div>

    <!-- Таблица вакансий -->
    <div class="card">
        <div class="card-header">
            <h2>Список вакансий</h2>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Название</th>
                            <th>Локация</th>
                            <th>Зарплата</th>
                            <th>Действия</th>
                        </tr>
                    </thead>
                    <tbody id="vacanciesTable">
                        @foreach($vacancies as $vacancy)
                        <tr id="vacancy-{{ $vacancy->id }}">
                            <td>{{ $vacancy->id }}</td>
                            <td>{{ $vacancy->title }}</td>
                            <td>{{ $vacancy->location }}</td>
                            <td>{{ $vacancy->salary ? number_format($vacancy->salary, 0, ',', ' ') . ' руб.' : 'Не указана' }}</td>
                            <td>
                                <button onclick="editVacancy({{ $vacancy->id }})" class="btn btn-sm btn-warning">Редактировать</button>
                                <button onclick="deleteVacancy({{ $vacancy->id }})" class="btn btn-sm btn-danger">Удалить</button>
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
    let currentVacancyId = null;

    // Инициализация при загрузке страницы
    document.addEventListener('DOMContentLoaded', function() {
        // Обработка отправки формы
        document.getElementById('vacancyForm').addEventListener('submit', handleFormSubmit);

        // Обработка отмены редактирования
        document.getElementById('cancelBtn').addEventListener('click', resetForm);
    });

    // Обработка отправки формы
    async function handleFormSubmit(e) {
        e.preventDefault();

        const form = e.target;
        const formData = new FormData(form);
        const url = isEditMode
            ? `/admin/vacancies/${currentVacancyId}`
            : '/admin/vacancies';

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
                    updateVacancyRow(data.vacancy);
                } else {
                    addVacancyRow(data.vacancy);
                }
            }
        } catch (error) {
            console.error('Ошибка:', error);
            alert(`Ошибка: ${error.message}`);
        }
    }

    // Редактирование вакансии
    async function editVacancy(id) {
        try {
            const response = await fetch(`/admin/vacancies/${id}`);
            if (!response.ok) {
                throw new Error('Ошибка загрузки данных');
            }

            const vacancy = await response.json();

            // Заполняем форму
            document.getElementById('vacancyId').value = vacancy.id;
            document.getElementById('title').value = vacancy.title;
            document.getElementById('description').value = vacancy.description;
            document.getElementById('requirements').value = vacancy.requirements;
            document.getElementById('location').value = vacancy.location;
            document.getElementById('salary').value = vacancy.salary;

            // Переключаем в режим редактирования
            isEditMode = true;
            currentVacancyId = vacancy.id;
            document.getElementById('formTitle').textContent = 'Редактировать вакансию';
            document.getElementById('submitBtn').textContent = 'Обновить';
            document.getElementById('cancelBtn').style.display = 'inline-block';

            // Прокрутка к форме
            document.getElementById('vacancyForm').scrollIntoView({ behavior: 'smooth' });

        } catch (error) {
            console.error('Ошибка:', error);
            alert(`Ошибка при загрузке вакансии: ${error.message}`);
        }
    }

    // Удаление вакансии
    async function deleteVacancy(id) {
        if (!confirm('Вы уверены, что хотите удалить эту вакансию?')) return;

        try {
            const response = await fetch(`/admin/vacancies/${id}`, {
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
                document.getElementById(`vacancy-${id}`).remove();
            }
        } catch (error) {
            console.error('Ошибка:', error);
            alert(`Ошибка при удалении: ${error.message}`);
        }
    }

    // Сброс формы
    function resetForm() {
        document.getElementById('vacancyForm').reset();
        document.getElementById('vacancyId').value = '';
        isEditMode = false;
        currentVacancyId = null;
        document.getElementById('formTitle').textContent = 'Добавить новую вакансию';
        document.getElementById('submitBtn').textContent = 'Создать';
        document.getElementById('cancelBtn').style.display = 'none';
    }

    // Добавление новой строки в таблицу
    function addVacancyRow(vacancy) {
        const row = document.createElement('tr');
        row.id = `vacancy-${vacancy.id}`;
        row.innerHTML = `
            <td>${vacancy.id}</td>
            <td>${vacancy.title}</td>
            <td>${vacancy.location}</td>
            <td>${vacancy.salary ? new Intl.NumberFormat('ru-RU').format(vacancy.salary) + ' руб.' : 'Не указана'}</td>
            <td>
                <button onclick="editVacancy(${vacancy.id})" class="btn btn-sm btn-warning">Редактировать</button>
                <button onclick="deleteVacancy(${vacancy.id})" class="btn btn-sm btn-danger">Удалить</button>
            </td>
        `;
        document.getElementById('vacanciesTable').prepend(row);
    }

    // Обновление строки в таблице
    function updateVacancyRow(vacancy) {
        const row = document.getElementById(`vacancy-${vacancy.id}`);
        if (row) {
            row.innerHTML = `
                <td>${vacancy.id}</td>
                <td>${vacancy.title}</td>
                <td>${vacancy.location}</td>
                <td>${vacancy.salary ? new Intl.NumberFormat('ru-RU').format(vacancy.salary) + ' руб.' : 'Не указана'}</td>
                <td>
                    <button onclick="editVacancy(${vacancy.id})" class="btn btn-sm btn-warning">Редактировать</button>
                    <button onclick="deleteVacancy(${vacancy.id})" class="btn btn-sm btn-danger">Удалить</button>
                </td>
            `;
        }
    }
</script>

<style>

    /* Общие стили контейнера */
    .admin-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 20px;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    /* Заголовки */
    .admin-title {
        color: #2c3e50;
        margin-bottom: 25px;
        font-size: 24px;
        font-weight: 600;
    }

    /* Карточки форм и таблиц */
    .admin-card {
        background: #ffffff;
        border: 1px solid #dee2e6;
        border-radius: 5px;
        box-shadow: 0 2px 4px rgba(0,0,0,0.05);
        margin-bottom: 20px;
    }

    .admin-card-header {
        padding: 15px;
        background-color: #f8f9fa;
        border-bottom: 1px solid #dee2e6;
    }

    .admin-card-body {
        padding: 20px;
    }

    /* Формы */
    .form-group {
        margin-bottom: 20px;
    }

    .form-group label {
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
    .admin-table {
        width: 100%;
        margin-bottom: 1rem;
        color: #212529;
        border-collapse: collapse;
    }

    .admin-table th,
    .admin-table td {
        padding: 12px;
        vertical-align: middle;
        border-top: 1px solid #dee2e6;
    }

    .admin-table thead th {
        vertical-align: bottom;
        border-bottom: 2px solid #dee2e6;
        background-color: #f8f9fa;
        font-weight: 600;
    }

    .admin-table tbody tr:hover {
        background-color: rgba(0,0,0,.02);
    }

    /* Изображения */
    .table-image {
        max-width: 60px;
        max-height: 60px;
        border-radius: 4px;
    }

    .image-preview {
        margin-top: 10px;
    }

    .image-preview img {
        max-width: 200px;
        max-height: 200px;
        border-radius: 4px;
        border: 1px solid #eee;
    }

    /* Действия в таблице */
    .table-actions {
        display: flex;
        gap: 8px;
    }

    /* Ошибки */
    .invalid-feedback {
        display: none;
        width: 100%;
        margin-top: 5px;
        font-size: 13px;
        color: #dc3545;
    }

    .is-invalid ~ .invalid-feedback {
        display: block;
    }

    /* Уведомления */
    .alert {
        position: fixed;
        top: 20px;
        right: 20px;
        padding: 12px 20px;
        border-radius: 4px;
        color: white;
        z-index: 1000;
        opacity: 0;
        transition: opacity 0.3s;
        max-width: 400px;
        box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    }

    .alert-success {
        background-color: #28a745;
    }

    .alert-error {
        background-color: #dc3545;
    }

    .alert.show {
        opacity: 1;
    }

    /* Индикатор загрузки */
    .spinner {
        display: inline-block;
        width: 18px;
        height: 18px;
        border: 3px solid rgba(255,255,255,.3);
        border-radius: 50%;
        border-top-color: #fff;
        animation: spin 1s ease-in-out infinite;
        margin-right: 8px;
        vertical-align: text-top;
    }

    @keyframes spin {
        to { transform: rotate(360deg); }
    }

    /* Адаптивность */
    @media (max-width: 768px) {
        .admin-container {
            padding: 15px;
        }

        .admin-table {
            display: block;
            overflow-x: auto;
        }

        .table-actions {
            flex-direction: column;
            gap: 5px;
        }
    }

</style>
@endsection
