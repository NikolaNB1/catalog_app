<?php

use App\Http\Controllers\CommentsController;
use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;


Route::get('/', [ProductsController::class, 'index']);

Route::post('/comments', [CommentsController::class, 'store'])->name('comments.store');
Route::get('/comments/pending', [CommentsController::class, 'pending'])->name('comments.pending');
Route::put('/comments/{comment}/approve', [CommentsController::class, 'approve'])->name('comments.approve');
