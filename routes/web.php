<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    //Tasks

    Route::get('tasks', [TaskController::class, 'index']);

    Route::get('tasks/create', [TaskController::class, 'create']);
    
    Route::post('tasks/create', [TaskController::class, 'store']);
    
    Route::get('tasks/edit/{id}', [TaskController::class, 'edit']);
    
    Route::post('tasks/edit/{id}', [TaskController::class, 'update']);
    
    Route::get('/tasks/delete/{id}', [TaskController::class, 'delete']);

});

require __DIR__.'/auth.php';
