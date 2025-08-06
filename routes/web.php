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
    Route::controller(TaskController::class)->group(function () {
        Route::get('/dashboard', 'index')->name('dashboard');
        Route::get('/create-task', 'create')->name('task.create');
        Route::post('/store-task', 'store')->name('task.store');
    });
    //--------------------------------------PROFILE--------------------------------------//
    Route::controller(ProfileController::class)->group(function (){
        Route::get('/profile','edit')->name('profile.edit');
        Route::patch('/profile', 'update')->name('profile.update');
        Route::delete('/profile', 'destroy')->name('profile.destroy');
    });
});

Route::prefix('admin')->middleware(['auth', 'is_admin'])->group(function () {
    Route::get('dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('about/{id}/profile', function (string $id) {
        return 'This is about page';
    })->name('admin.about');

//    $url = route('admin.about', ['id' => 1, 'photo' => 'yes']);
//    dd($url);
});

require __DIR__ . '/auth.php';
