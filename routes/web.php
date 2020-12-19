<?php

use App\Http\Controllers\AcceptAnswerController;
use App\Http\Controllers\AnswerController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\QuestionController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('questions', QuestionController::class)->except('show');
// Route::post('/questions/{question}/answer', [AnswerController::class, 'store'])->name('answer.store');
Route::resource('questions.answers', AnswerController::class)->except(['index', 'create', 'show']);
Route::get('questions/{slug}', [QuestionController::class, 'show'])->name('questions.show');
Route::post('answers/{answer}/accpet', AcceptAnswerController::class)->name('answers.accept');


Route::post('/questions/{question}/favorites', [FavoriteController::class, 'store'])->name('questions.favorite');
Route::delete('/questions/{question}/favorites', [FavoriteController::class, 'destroy'])->name('questions.unfavorite');
