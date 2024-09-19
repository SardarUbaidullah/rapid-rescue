<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;

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

/*Route::get('/', function () {
    return view('users.index');
});*/

                // USER ROUTS
Route::get('/' , [UserController::class, 'index'])->name('user-index');
Route::get('/users.contact' , [UserController::class, 'contact'])->name('user-contact');
Route::get('/users.doctor' , [UserController::class, 'doctor'])->name('user-doctor');
Route::get('/users.service' , [UserController::class, 'service'])->name('user-service');
Route::get('/users.testimonials' , [UserController::class, 'testimonials'])->name('user-testimonials');
Route::get('/users.about' , [UserController::class, 'about'])->name('user-about');




// Admin routes
Route::get('/add_ambulance' , [AdminController::class, 'add_ambulance'])->name('add-ambulance');
Route::get('/add_driver' ,  [AdminController::class, 'add_driver'])->name('add-driver');
Route::get('/dashboard' ,  [AdminController::class, 'dashboard']);
Route::get('/all_driver' ,  [AdminController::class, 'all_driver'])->name('all-driver');
Route::post('/upload_driver' ,  [AdminController::class, 'upload_driver']);


Route::middleware([
    'auth:sanctum',

    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {

        if(Auth::id()){
            if(Auth::User()->usertype === '0'){
                return view('users.index');
            }
            elseif(Auth::User()->usertype === '1'){
                return view('driver.index');
            }else{
                return view('admin.index');
            }
        }else{
            return redirect()->back();
        }
        
    })->name('dashboard');
});
