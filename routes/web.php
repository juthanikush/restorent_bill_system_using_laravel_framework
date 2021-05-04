<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\MenuController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\fornt\Main;

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

Route::get('/', function () {
    return view('user/index');
});

Route::post('billing_detalis',[Main::class,'billing_detalis']);
Route::get('bill',[Main::class,'user']);
Route::get('finsh',[Main::class,'finsh']);
Route::post('billing_detalis',[Main::class,'billing_detalis']);
Route::get('login',[AdminController::class,'login'])->name('login');
Route::post('login_detalis',[AdminController::class,'login_manage'])->name('login_detalis');

Route::group(['middleware'=>'admin_login'],function(){
    Route::get('admin',[CategoryController::class,'category']);
    Route::get('admin/update/{id}',[CategoryController::class,'add_category']);
    Route::get('admin/delete/{id}',[CategoryController::class,'delete']);
    Route::get('admin/status/{status}/{id}',[CategoryController::class,'status']);
    Route::get('manage_category',[CategoryController::class,'add_category'])->name('manage_category');
    Route::post('manage_category',[CategoryController::class,'manage_category'])->name('manage_category');

    Route::get('menu',[MenuController::class,'menu']);
    Route::get('add_menu',[MenuController::class,'add_menu']);
    Route::get('manage_menu',[MenuController::class,'manage_menu'])->name('manage_menu');
    Route::post('manage_menu',[MenuController::class,'manage_menu'])->name('manage_menu');
    Route::get('update/{id}',[MenuController::class,'add_menu']);
    Route::get('delete/{id}',[MenuController::class,'delete']);
    Route::get('status/{status}/{id}',[MenuController::class,'status']);

    Route::get('info',[AdminController::class,'info'])->name('info');
    Route::get('add_info',[AdminController::class,'add_info'])->name('add_info');
    Route::get('info/update/{id}',[AdminController::class,'add_info']);
    Route::get('info/delete/{id}',[AdminController::class,'delete']);
    Route::post('manage_info',[AdminController::class,'manage_info'])->name('manage_info');


    Route::get('bill_view',[AdminController::class,'admin_bill']);
    Route::get('view_bill/{u_id}/{str}',[AdminController::class,'view_bill']);
    
    Route::get('logout', function () {
        session()->forget('ADMIN_LOGIN');
        session()->forget('ADMIN_ID');
        session()->flash('error','logout sucessfully');
        return redirect('admin');
        
    });
  
});