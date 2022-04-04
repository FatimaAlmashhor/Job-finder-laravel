<?php

use App\Http\Controllers\admin\JobsController;
use App\Http\Controllers\admin\CompeniesController;
use App\Http\Controllers\admin\MejersController;
use App\Http\Controllers\admin\ServicesController;
use App\Http\Controllers\admin\SkillsController;
use App\Http\Controllers\admin\UsersController;
use App\Http\Controllers\client\clientController;

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


// client routing 
Route::get('/', [clientController::class, 'showHome'])->name('home');
Route::get('/aboutus', [clientController::class, 'showAboutUs'])->name('aboutus');
Route::get('/ourservics', [clientController::class, 'showOurServices'])->name('ourservices');
Route::get('/connectus', [clientController::class, 'showConnectUs'])->name('connectus');

Route::get('/jobs', [clientController::class, 'showJobs'])->name('jobs');
Route::get('/job/details', [clientController::class, 'showJobDetails'])->name('jobdetails');

Route::get('/login', [clientController::class, 'showLogin'])->name('login');
Route::get('/register', [clientController::class, 'showRegister'])->name('register');
Route::get('/profile', [clientController::class, 'showProfile'])->name('profile');
Route::get('/profile/edit', [clientController::class, 'showEditProfile'])->name('editprofile');

Route::get('/compenies', [clientController::class, 'showCompenies'])->name('compenies');


// admin routing
Route::get('/admin', [JobsController::class, 'showJobs'])->name('admin/jobs');
Route::get('/admin/campenies', [CompeniesController::class, 'showCompenies'])->name('admin/compenies');
Route::get('/admin/mejers', [MejersController::class, 'showMajers'])->name('admin/mejers');
Route::get('/admin/services', [ServicesController::class, 'showServices'])->name('admin/services');
Route::get('/admin/skills', [SkillsController::class, 'showSkills'])->name('admin/skills');
Route::get('/admin/users', [UsersController::class, 'showUsers'])->name('admin/users');