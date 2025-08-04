<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TaskController;
use App\Models\Task;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::middleware(['auth', 'is_user'])->group(function () {
    //--------------------------------------TASK--------------------------------------//
    Route::get('/dashboard', [TaskController::class, 'index'])->name('dashboard');
    Route::get('/create-task', [TaskController::class, 'create'])->name('task.create');
    Route::post('/store-task', [TaskController::class, 'store'])->name('task.store');
    //--------------------------------------PROFILE--------------------------------------//
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::prefix('admin')->middleware(['auth', 'is_admin'])->group(function () {
//    Route::get('admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('dashboard', function () {
        return auth()->check();
    })->name('admin.dashboard');
});

require __DIR__.'/auth.php';
