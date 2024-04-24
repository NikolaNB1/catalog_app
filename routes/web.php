<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CommentsController;
use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;


Route::get('/', [ProductsController::class, 'index']);

Route::post('/comments', [CommentsController::class, 'store'])->name('comments.store');
Route::get('/comments/pending', [CommentsController::class, 'pending'])->name('comments.pending');
Route::put('/comments/{comment}/approve', [CommentsController::class, 'approve'])->name('comments.approve')->middleware('auth');
Route::delete('/comments/{comment}', [CommentsController::class, 'destroy'])->name('comments.destroy');


Route::get('/signin', [AuthController::class, 'getSignIn']);
Route::post('/signin', [AuthController::class, 'signIn']);
Route::get('/signout', [AuthController::class, 'signOut']);
