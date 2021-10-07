#!/bin/sh
# echo "Lravel Installing"
# composer create-project laravel/laravel example-app
# echo "Laravel UI"

# echo "Bootstrap"
# composer require laravel/ui
# php artisan ui bootstrap
# php artisan ui bootstrap --auth
# npm install; npm run dev
#<!-- Scripts -->
#<script src="{{ asset('js/app.js') }}" defer></script>
#<!-- Styles -->
#<link href="{{ asset('css/app.css') }}" rel="stylesheet">

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
# php artisan make:migration create_images_table
# php artisan make:migration create_reviews_table

# echo "Generate Seeding files"
# php artisan make:seeder UsersTableSeeder
# php artisan make:seeder FollowingsTableSeeder
# php artisan make:seeder CategoriesTableSeeder
# php artisan make:seeder ManufacturersTableSeeder
# php artisan make:seeder ItemsTableSeeder
# php artisan make:seeder CommentsTableSeeder
# php artisan make:seeder ReviewsTableSeeder
# php artisan make:seeder ImagesTableSeeder

# echo "Seeding data"
# php artisan migrate:refresh --seed

# echo "Generate model"
# php artisan make:model Followings
# php artisan make:model Categories
# php artisan make:model Manufacturers
# php artisan make:model Items
# php artisan make:model Reviews
# php artisan make:model Votes
# php artisan make:model Images

# echo "Generate controller"
# php artisan make:controller ItemsController --resource
# php artisan make:controller ReviewsController --resource
# php artisan make:controller VotesController --resource
