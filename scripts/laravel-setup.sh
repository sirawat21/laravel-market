#!/bin/sh
# echo "Lravel Installing"
# composer create-project laravel/laravel example-app
# echo "Laravel UI"
# composer require laravel/ui
# echo "Bootstrap"
# php artisan ui bootstrap

# echo "Generate table files"
# php artisan make:migration create_users_table
# php artisan make:migration create_items_table
# php artisan make:migration create_categories_table
# php artisan make:migration create_comments_table
# php artisan make:migration create_followings_table
# php artisan make:migration create_manufactureres_table
# php artisan make:migration create_images_table
# php artisan make:migration create_reviews_table

# echo "Create Sqlite file"
# touch ./database/database.sqlite

# echo "Recreat Sqlite file"
# rm -rf  ./database/database.sqlite; touch ./database/database.sqlite

# echo "Install Auth sacffold"
# composer require laravel/breeze --dev
# php artisan breeze:install
# npm install && npm run dev
# php artisan migrate

# echo "Generate Seeding files"
# php artisan make:seeder UsersTableSeeder
# php artisan make:seeder ItemTableSeeder
# php artisan make:seeder CategoryTableSeeder
# php artisan make:seeder CommentTableSeeder
# php artisan make:seeder FollowTableSeeder
# php artisan make:seeder ManufactureTableSeeder

# echo "Seeding data"
# php artisan migrate:refresh --seed

# echo "Generate model"
# php artisan make:model Item
# php artisan make:model Category
# php artisan make:model Comment
# php artisan make:model Follow
# php artisan make:model Manufacture

# echo "Generate controller"
# php artisan make:controller ItemController --resource
