<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\FontendController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Auth;
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

route::get('/',[FontendController::class, 'index']);
route::get('cart', function(){
    return view('cart');
});
route::get('logout',[LoginController::class, 'getLogout']);

route::post('login',[LoginController::class, 'postLogin']);
route::post('register-test',[LoginController::class, 'postRegister']);
// product
route::get('mng-product',[ProductController::class, 'viewProduct']);
route::post('createproduct',[ProductController::class, 'createProduct']);
//view index 

