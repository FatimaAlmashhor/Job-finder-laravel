<?php

use App\Http\Controllers\CompeniesController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\jobsController;
use App\Http\Controllers\UsersController;
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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [homeController::class, 'index'])->name('home');
Route::get('/aboutus', [homeController::class, 'aboutUs'])->name('aboutus');
Route::get('/ourservics', [homeController::class, 'ourServices'])->name('ourservices');
Route::get('/connectus', [homeController::class, 'connectUs'])->name('connectus');

Route::get('/jobs', [jobsController::class, 'index'])->name('jobs');
Route::get('/job/details', [jobsController::class, 'details'])->name('jobdetails');

Route::get('/login', [UsersController::class, 'login'])->name('login');
Route::get('/register', [UsersController::class, 'register'])->name('register');
Route::get('/profile', [UsersController::class, 'profile'])->name('profile');
Route::get('/profile/edit', [UsersController::class, 'editProfile'])->name('editprofile');
Route::get('/profile/{id}', [UsersController::class, 'userProfile'])->name('userprofile');

Route::get('/compenies', [CompeniesController::class, 'index'])->name('compenies');