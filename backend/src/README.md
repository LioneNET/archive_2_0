# Описание

Список продукции

## Бек
Легче всего запустить в докере. Для этого перейдите в папку `./back` и поднимите докер контейнер командой `docker-compose up -d`
После этого поднимется нужная обьвязка: база, nginx, php сервер и т.д

Затем зайти в базу и создать таблицу `orders`
Перейти в папку `./back/src` и переименовать файл `.env.example` на .env
Установить зависимости командой `composer install`
Запустить миграции командой `php artisan migrate`
Сгенерировать ключ приложения командой `php artisan key:generate`
Если необходимо сгенерировать тестовые данные командой `php artisan db:seed`

## api

Доступны следующие роуты:

| url                    | method     | params                   | description                                            |
|------------------------|------------|--------------------------|--------------------------------------------------------|
| `/api/v1/product/{id}` | **get**    |                          | Получить товар                                         |
| `/api/v1/product`      | **get**    |                          | Получить список товаров                                |
| `/api/v1/order/{id}`   | **get**    |                          | Получить заказ                                         |
| `/api/v1/order`        | **get**    |                          | Получить все заказы                                    |
| `/api/v1/order`        | **post**   | `product_id`, `quantity` | Создать заказ                                          |
| `/api/v1/order/{id}`   | **put**    | `quantity`               | Обновить заказ                                         |
| `/api/v1/order/{id}`   | **delete** |                          | Удалить заказ                                          |
| `/api/v1/total`        | **get**    |                          | Получить итоговую стоимость по товарам и их количество |

## postman

Для тестирования aip в проект добавлен файл `testovoe.postman_collection` в нем же описаны основные запросы на api
Провести настройку `Variables`


В php artisan сделать миграции и сиды
