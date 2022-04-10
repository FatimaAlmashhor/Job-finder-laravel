<?php

use App\Http\Controllers\admin\JobsController;
use App\Http\Controllers\admin\CompeniesController;
use App\Http\Controllers\admin\MejersController;
use App\Http\Controllers\admin\ServicesController;
use App\Http\Controllers\admin\SkillsController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\client\clientController;
use App\Http\Controllers\settingController;
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

    // -----------------------------------------------------------------
    //    user UIs
    // -----------------------------------------------------------------
    Route::group(['middleware' => 'role:client'], function () {
        Route::get('/profile', [clientController::class, 'showProfile'])->name('profile');
        Route::get('/profile/edit', [clientController::class, 'showEditProfile'])->name('editprofile');
    });

    // -----------------------------------------------------------------
    // admin dashboard
    // -----------------------------------------------------------------
    Route::group(['middleware' => 'role:admin|super_admin'], function () {
        // admin routing
        Route::prefix('admin')->group(function () {

            // dashboard
            Route::view('/',  'admin.dashboard')->name('dashboard');

            // jobs
            Route::prefix('jobs')->controller(JobsController::class)->group(function () {
                Route::get('/',  'show')->name('adminJobs');
                Route::get('/add',  'add')->name('adminAddjob');
                Route::post('/upload',  'upload')->name('adminUploadJob');
                Route::get('/edit/{id}',  'edit')->name('adminEditJob');
                Route::post('/update/{id}',  'update')->name('adminUpdateJob');
                Route::get('/delete',  'delete')->name('adminDeleteJob');
            });

            // compenies
            Route::prefix('compenies')->controller(CompeniesController::class)->group(function () {
                Route::get('/', 'show')->name('adminCompenies');
                Route::get('/add',  'add')->name('adminAddCompeny');
                Route::post('/upload',  'upload')->name('adminUploadCompeny');
            });

            // mejers
            Route::prefix('mejers')->controller(MejersController::class)->group(function () {
                Route::get('/',  'show')->name('adminMejers');
                Route::get('/add',  'add')->name('adminAddMejer');
                Route::post('/upload',  'upload')->name('adminUploadMejer');
            });

            // services
            Route::prefix('services')->controller(ServicesController::class)->group(function () {
                Route::get('/', 'show')->name('adminServices');
                Route::get('/add', 'add')->name('adminAddServices');
                Route::post('/upload', 'upload')->name('adminUploadServices');
            });

            // skills
            Route::prefix('skills')->controller(SkillsController::class)->group(function () {
                Route::get('/', 'show')->name('adminSkills');
                Route::get('/add',  'add')->name('adminAddSkill');
                Route::post('/upload',  'upload')->name('adminUpdateSkill');
            });

            // users
            Route::get('/users', [UsersController::class, 'showUsers'])->name('adminUsers');
        });
    });
});


Route::get('/compenies', [clientController::class, 'showCompenies'])->name('compenies');


// -----------------------------------------------------


// regisster
Route::get('/admin/register', [UsersController::class, 'showAdminRegister'])->name('adminShowRegister');
Route::post('/admin/register', [UsersController::class, 'adminRegister'])->name('adminRegister');


Route::get('/admin/login', [UsersController::class, 'showAdminLogin'])->name('AdminShowlogin');
Route::post('/admin/login', [UsersController::class, 'adminLogin'])->name('adminLogin');

// logout
Route::get('/admin/logout', [UsersController::class, 'adminLogout'])->name('adminLogout');


// setting 
Route::get('/setting', [settingController::class, 'generateRoles'])->name('generateRoles');