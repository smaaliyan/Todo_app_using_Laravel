<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

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

Route::get('/', [TodoController::class, 'index']);
Route::get('create', [TodoController::class, 'create']);
Route::get('details/{todo}', [TodoController::class, 'details']);
// Route::get('edit', [TodoController::class, 'edit']);
Route::post('update', [TodoController::class, 'update']);
Route::delete('delete/{todo}', [TodoController::class, 'destroy'])->name('todos.destroy');
Route::patch('mark-completed/{todo}', [TodoController::class, 'markCompleted'])->name('todos.markCompleted');
// Route::get('delete', [TodoController::class, 'delete']);
Route::post('store-data', [TodoController::class, 'store']);
Route::resource('todos', TodoController::class);
Route::get('todos/{todo}/edit', [TodoController::class, 'edit'])->name('todos.edit');
Route::get('todos/{todo}', [TodoController::class, 'details'])->name('todos.details');
