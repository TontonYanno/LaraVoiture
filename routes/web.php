<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\OwnerRegister;
use App\Http\Middleware\admin;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

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
    //  User::create([
    //      'name'=>'John Doe',
    //      'email'=>'admin@gmail.com',
    //      'email_verified_at'=>Hash::make('admin@gmail.com'),
    //      'password'=>Hash::make('admin'),
    //      'type'=>'admin',
    //      'image'=>'',

    //  ]);

    return view('welcome');
});

Route::get('/adminlogin',[AdminController::class,'login'])->name('adminlogin');

Route::post('/logout',[AdminController::class,'logout'])->name('logout')->middleware('auth');
Route::post('/adminlogique',[AdminController::class,'dologin'])->name('login');

Route::middleware(admin::class)->group(function(){
    Route::get('/admin',[AdminController::class,'admin'])->name('admin');
    Route::get('/client',[AdminController::class,'client'])->name('client');
    Route::get('/owner',[AdminController::class,'owner'])->name('owner');
    
    Route::post('/clientregister',[AdminController::class,'clientregister'])->name(("clientregister"));
    Route::get("/delete/{id}",[AdminController::class,'delete']);
    
    Route::get("/update/{id}",[AdminController::class,'update']);
    Route::post("/userupdate",[AdminController::class,'userupdate'])->name('update');


    Route::post('/ownerregister',[AdminController::class,'ownerregister'])->name(("ownerregister"));
    Route::put('/ownerupdate/{id}', [AdminController::class , 'ownerupdate'])->name('ownerupdate');

    Route::get ('profils',[OwnerRegister::class,'ownerprofile'])->name('profile');
});
