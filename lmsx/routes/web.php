<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\CourseController;
use App\Http\Controllers\Dashboard\UserController;
use App\Http\Controllers\Home\HomeController;
use App\Http\Middleware\AuthenticateMiddleware;
use App\Http\Middleware\LoginMiddleware;
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

//login
Route::get('admin', [AuthController::class, 'index'])->name('auth.admin')->middleware(LoginMiddleware::class);
Route::post('login',[AuthController::class, 'login'])->name('auth.login');
//logout
Route::get('logout', [AuthController::class, 'logout'])->name('auth.logout');

//dashboard
Route::get('dashboard/index', [DashboardController::class, 'index'])->name('dashboard.index');
// Route::get('dashboard/index', [DashboardController::class, 'index'])->name('dashboard.index')->middleware(AuthenticateMiddleware::class);

//user
Route::get('user/index', [UserController::class, 'index'])->name('user.index');


//course
Route::get('course/index', [CourseController::class, 'index'])->name('course.index');
//register
Route::get('/register', [AuthController::class, 'viewRegister'])->name('auth.register');
Route::post('/register', [AuthController::class, 'register']);

//home
Route::get('home/index', [HomeController::class, 'index'])->name('home.index');