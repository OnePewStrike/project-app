<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
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
Route::get('/login', [AuthController::class, 'login']);
Route::get('/registration', [AuthController::class, 'registration']);
Route::post('/register-user', [AuthController::class, 'registerUser'])->name('register-user');

Route::post('/login-user', [AuthController::class, 'loginUser'])->name('login-user');
Route::get('/dashboard', [AuthController::class, 'dashboard']);

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
