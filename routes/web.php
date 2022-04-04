<?php

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
Route::get('/job/details', [clientController::class, 'showDetails'])->name('jobdetails');

Route::get('/login', [clientController::class, 'showLogin'])->name('login');
Route::get('/register', [clientController::class, 'showRegister'])->name('register');
Route::get('/profile', [clientController::class, 'showProfile'])->name('profile');
Route::get('/profile/edit', [clientController::class, 'showEditProfile'])->name('editprofile');

Route::get('/compenies', [clientController::class, 'showCompenies'])->name('compenies');