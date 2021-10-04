#!/bin/sh
# echo "Lravel Installing"
# composer create-project laravel/laravel example-app
# echo "Laravel UI"
# composer require laravel/ui
# echo "Bootstrap"
# php artisan ui bootstrap

# echo "Create Sqlite file"
# touch ./database/database.sqlite
# echo "Recreat Sqlite file"
# rm -rf  ./database/database.sqlite; touch ./database/database.sqlite

# echo "Install Auth sacffold"
# composer require laravel/breeze --dev
# php artisan breeze:install
# npm install && npm run dev
# php artisan migrate

# echo "Generate table files"
# php artisan make:migration create_users_table
# php artisan make:migration create_followings_table
# php artisan make:migration create_categories_table
# php artisan make:migration create_manufacturers_table
# php artisan make:migration create_items_table
# php artisan make:migration create_comments_table
# php artisan make:migration create_reviews_table

# echo "Generate Seeding files"
# php artisan make:seeder UsersTableSeeder
# php artisan make:seeder FollowingsTableSeeder
# php artisan make:seeder CategoriesTableSeeder
# php artisan make:seeder ManufacturersTableSeeder
# php artisan make:seeder ItemsTableSeeder
# php artisan make:seeder CommentsTableSeeder
# php artisan make:seeder ReviewsTableSeeder

# echo "Seeding data"
# php artisan migrate:refresh --seed

# echo "Generate model"
# php artisan make:model Followings
# php artisan make:model Categories
# php artisan make:model Manufacture
# php artisan make:model Items
# php artisan make:model Comments
# php artisan make:model Reviews

# echo "Generate controller"
# php artisan make:controller ItemsController --resource

