<?php

use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\ExaminerController;
use App\Http\Controllers\admin\RoleController;
use App\Http\Controllers\admin\SubCategoryController;
use App\Http\Controllers\auth\AuthController;
use App\Http\Controllers\guest\GuestController;
use Illuminate\Support\Facades\Route;

Route::get('/login', [AuthController::class, 'login'])->middleware('guest');
Route::post('/login', [AuthController::class, 'authenticate'])->name('login')->middleware('guest');

Route::get('/', [GuestController::class, 'index']);

Route::post('/logout', function () {
    auth()->logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();

    return redirect('/login');
})->name('logout')->middleware('auth');

Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

    Route::resource('roles', RoleController::class);
    Route::resource('category', CategoryController::class);
    Route::resource('sub-category', SubCategoryController::class);
    Route::resource('penguji', ExaminerController::class);
});
Route::get('/pengaturan', function () {
    return view('pages.admin.dashboard');
});
