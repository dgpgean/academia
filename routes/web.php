<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\{UserController, WorkoutController};
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
    return view('site.home');
});


Auth::routes();





Route::prefix('admin')->group(function () {
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/users/new', [UserController::class, 'new'])->name('users_new');
    Route::get('/users', [UserController::class, 'index'])->name('users_all');
    Route::get('/users/edit/{id}', [UserController::class, 'edit'])->name('users_edit');
    Route::post('/users', [UserController::class, 'store'])->name('users_store');
    Route::put('/users', [UserController::class, 'update'])->name('users_update');
    Route::get('/workouts/new', [WorkoutController::class, 'new'])->name('workout_new');
});


Route::prefix('views')->group(function () {
    Route::post('/history', [App\Http\Controllers\HomeController::class, 'history'])->name('history');
    Route::post('/workouts', [App\Http\Controllers\HomeController::class, 'workouts'])->name('workouts');
    Route::post('/workoutSingle/{id}', [App\Http\Controllers\HomeController::class, 'workoutSingle'])->name('workoutSingle');
    Route::post('/exerciseSingle/{id}', [App\Http\Controllers\HomeController::class, 'exerciseSingle'])->name('exerciseSingle');
});
