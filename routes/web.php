<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
    return view('users.index');
});

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
