<?php

use App\Http\Controllers\admin\JobsController;
use App\Http\Controllers\admin\CompeniesController;
use App\Http\Controllers\admin\MejersController;
use App\Http\Controllers\admin\ServicesController;
use App\Http\Controllers\admin\SkillsController;
use App\Http\Controllers\UsersController;
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

// login
Route::get('/login', [clientController::class, 'showLogin'])->name('login');
Route::post('/login', [UsersController::class, 'clientLogin'])->name('clientLogin');

// register
Route::get('/register', [clientController::class, 'showRegister'])->name('register');
Route::post('/register', [UsersController::class, 'clientRegister'])->name('clientRegister');

// logout
Route::get('/logout', [UsersController::class, 'clientLogout'])->name('logout');


// profile
Route::group(['middleware' => 'auth'], function () {
    Route::get('/profile', [clientController::class, 'showProfile'])->name('profile');
    Route::get('/profile/edit', [clientController::class, 'showEditProfile'])->name('editprofile');
});


Route::get('/compenies', [clientController::class, 'showCompenies'])->name('compenies');


// -----------------------------------------------------
// admin routing
Route::get('/admin', [JobsController::class, 'showJobs'])->name('adminJobs');

// compenies
Route::get('/admin/campenies', [CompeniesController::class, 'show'])->name('adminCompenies');
Route::get('/admin/campenies/add', [CompeniesController::class, 'add'])->name('adminAddCompeny');
Route::post('/admin/campenies/upload', [CompeniesController::class, 'upload'])->name('adminUploadCompeny');


Route::get('/admin/mejers', [MejersController::class, 'show'])->name('adminMejers');
Route::get('/admin/mejers/add', [MejersController::class, 'add'])->name('adminAddMejer');
Route::post('/admin/mejers/upload', [MejersController::class, 'upload'])->name('adminUploadMejer');

// services
Route::get('/admin/services', [ServicesController::class, 'show'])->name('adminServices');
Route::get('/admin/services/add', [ServicesController::class, 'add'])->name('adminAddServices');
Route::post('/admin/services/upload', [ServicesController::class, 'upload'])->name('adminUploadServices');

// skilla
Route::get('/admin/skills', [SkillsController::class, 'show'])->name('adminSkills');
Route::get('/admin/skills/add', [SkillsController::class, 'add'])->name('adminAddSkill');
Route::post('/admin/skills/upload', [SkillsController::class, 'upload'])->name('adminUpdateSkill');

// users
Route::get('/admin/users', [UsersController::class, 'showUsers'])->name('adminUsers');

// regisster
Route::get('/admin/register', [UsersController::class, 'showAdminRegister'])->name('adminShowRegister');
Route::post('/admin/register', [UsersController::class, 'adminRegister'])->name('adminRegister');


Route::get('/admin/login', [UsersController::class, 'showAdminLogin'])->name('AdminShowlogin');
Route::post('/admin/login', [UsersController::class, 'adminLogin'])->name('adminLogin');