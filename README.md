# laravel_last_test pigly

# 環境構築
Dockerビルド

docker-compose up -d --build

laravel環境開発
1.docker-compose exec php bash
2.composer install
3.envファイル作成、環境変数を変更
4.php artisan key:generate
5.php artisan migrate
6.php artisan db:seed


使用技術

.php
.laravel
.MySQL

URL

.開発環境　http://localhost/
.phpMyAdmin:http//localhost:8080/

#ER図
users
---------------------------------
| id (PK)          | bigint     |◀────┐
| name             | varchar    |     │
| email            | varchar    |     │
| password         | varchar    |     │
| created_at       | timestamp  |     │
| updated_at       | timestamp  |     │
---------------------------------     │
                                      │
weight_target                        (1対1)
---------------------------------     │
| id (PK)          | bigint     |◀───┘
| user_id (FK)     | bigint     |─────┐
| target_weight    | decimal    |     │
| created_at       | timestamp  |     │
| updated_at       | timestamp  |     │
---------------------------------     │
                                      │
weight_logs                          (1対多)
---------------------------------     │
| id (PK)          | bigint     |◀───┘
| user_id (FK)     | bigint     |─────┐
| date             | date       |     │
| weight           | decimal    |     │
| calories         | int        |     │
| exercise_time    | time       |     │
| exercise_content | text       |     │
| created_at       | timestamp  |     │
| updated_at       | timestamp  |     │
---------------------------------     │
