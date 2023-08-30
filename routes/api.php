<?php

use App\Http\Controllers\ApiController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('/authors-without-books', [ApiController::class, 'getAuthorsWithoutBooks']);
Route::get('/books', [ApiController::class, 'getBooks']);
Route::get('/authors-with-more-than-three-books', [ApiController::class, 'getAuthorsWithMoreThanThreeBooks']);
Route::get('/user/{id}/last-book', [ApiController::class, 'getUserLastReceivedBook']);
Route::get('/users-with-books', [ApiController::class, 'getUsersWithBooks']);
