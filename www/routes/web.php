<?php
use Illuminate\Support\Facades\Route;

/* Controllers */
use App\Http\Controllers\ItemsController;
use App\Http\Controllers\ReviewsController;
use App\Http\Controllers\VotesController;
use App\Http\Controllers\FollowingsController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('pages.home');
});

Route::get('sys/error', function () {
    // return view('pages.error',[ 'err_message' => $err_message]);
    return view('pages.error');
});

/* Reset Database */
Route::get('/sys/resetdb', function () {
    $cmd = "cd ../;cd database;rm -f database.sqlite;
        cp database.backup.sqlite database.sqlite;";
    exec($cmd);
    return redirect('/');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
Auth::routes();

/* Route User */
require __DIR__.'/user.php';

/* Route Controllers */
Route::resource('item', ItemController::class);
Route::resource('review', ReviewsController::class);
Route::resource('vote', VotesController::class);
Route::resource('following', FollowingsController::class);

/* Additional Route Controllers */
// Route::get('item', [ItemsController::class, 'index'])->name('home');
