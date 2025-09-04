# to-do-list
REST API для управления списком задач

## Технологии

-   **Backend**: Laravel 12
-   **База данных**: MySQL

## 🚀 Функционал

-   Создание задачи: POST /tasks (поля: title, description, status).
-   Просмотр списка задач: GET /tasks (возвращает все задачи).
-   Просмотр одной задачи: GET /tasks/{id}.
-   Обновление задачи: PUT /tasks/{id}.
-   Удаление задачи: DELETE /tasks/{id}.


## Установка
1. Клонировать репозиторий:
```bash
git clone https://github.com/ManasArs13/to-do-list.git && cd to-do-list
```

2. Установите зависимости:
```bash
composer install && npm install && npm run build
```

3. Настройте:

```bash
cp .env.example .env
php artisan key:generate
```

4. Запустить миграции:

```bash
php artisan migrate --seed
```
