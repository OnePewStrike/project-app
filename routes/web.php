<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\BooksController;

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
    return view('welcome');
});

// Login-Register Controller
Route::get('/login', [CustomAuthController::class, 'login']);
Route::get('/registration', [CustomAuthController::class, 'registration']);
Route::post('/register-user', [CustomAuthController::class, 'registerUser'])->name('register-user');

Route::post('/login-user', [CustomAuthController::class, 'loginUser'])->name('login-user');

// Book CRUD Controller
Route::get('/home', [BooksController::class, 'home']);
Route::get('/add', [BooksController::class, 'add']);
Route::get('/update', [BooksController::class, 'update']);

Route::get('/maintenance', [BooksController::class, 'index']);
Route::get('/add-book', [BooksController::class, 'addBook']);
Route::post('/save-book', [BooksController::class, 'saveBook']);

Route::get('/edit-book/{id}', [BooksController::class, 'editBook']);
Route::post('/update-book', [BooksController::class, 'updateBook']);

Route::get('/delete-book/{id}', [BooksController::class, 'deleteBook']);
