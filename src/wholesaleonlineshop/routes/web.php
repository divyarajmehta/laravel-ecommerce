<?php

use App\Http\Controllers\Admin\AdminLoginController;
use App\Http\Controllers\Admin\CartController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PageController as AdminPageController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Client\PageController as ClientPageController;
use App\Http\Controllers\Admin\UserController as AdminManageUserController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Client\MyCart;
use App\Http\Controllers\Client\MyProfileController;

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

//Admin Side
Route::prefix('admin')->group(function() {
    Route::group(['middleware'=>'admin.guest'], function() {
        Route::view('/login','admin_side.login')->name('admin.login');
        Route::post('/login',[AdminLoginController::class,'authenticate'])->name('admin.auth');
    });

    Route::group(['middleware'=>'admin.auth'], function() {
        Route::get('/',[AdminPageController::class,'index'])->name('admin.dashboard');
        Route::post('/logout',[AdminLoginController::class,'logout'])->name('admin.logout');
        Route::get('/button',[AdminPageController::class,'button']);
        Route::get('/errorpage',[AdminPageController::class,'errorpage']);
        Route::get('/gallery',[AdminPageController::class,'gallery']); 
        Route::get('/icons',[AdminPageController::class,'icons']);
        Route::get('/input',[AdminPageController::class,'input']);
        Route::get('/signin',[AdminPageController::class,'signin']);
        Route::get('/tabels',[AdminPageController::class,'tabels']);
        Route::get('/typography',[AdminPageController::class,'typography']);
        Route::prefix('users')->group(function() {
            Route::get('/list',[AdminManageUserController::class,'userslist']);
        });
        Route::get('/profile',[AdminPageController::class,'profile']);
        Route::post('/updateprofile',[ProfileController::class,'update']);
        Route::get('/blank',[AdminPageController::class,'blank']);
        Route::get('/products',[AdminPageController::class,'products']);
        Route::get('/orders',[AdminPageController::class,'orders']);
        Route::get('/invoices',[AdminPageController::class,'invoices']);
        Route::get('/updateuser/{id}',[AdminPageController::class,'updateuser']);
        Route::get('/updateproduct/{id}',[ProductController::class,'edit']);
        Route::get('/addproduct',[AdminPageController::class,'addproduct']);
        Route::get('/updateorder',[AdminPageController::class,'updateorder']);
        Route::post('/updateuser/{id}',[AdminManageUserController::class,'update']);
        Route::get('/deleteuser/{id}',[AdminManageUserController::class,'destroy']);
        Route::post('/addproduct/',[ProductController::class,'store']);
        Route::get('/deleteproduct/{id}',[ProductController::class,'destroy']);
        Route::post('/updateproduct/{id}',[ProductController::class,'update']);
        Route::get('/carts',[CartController::class,'index']);
        Route::get('/addcart',[CartController::class,'create']);
        Route::post('/addcart',[CartController::class,'store']);
        Route::get('/deletecart/{id}',[CartController::class,'destroy']);
        Route::get('/updatecart/{id}',[CartController::class,'edit']);
        Route::post('/updatecart/{id}',[CartController::class,'update']);
    });
});

//Client Side
Auth::routes();
Route::get('/', [ClientPageController::class, 'index'])->name('home');
Route::get('/about',[ClientPageController::class,'about']);
Route::get('/contact',[ClientPageController::class,'contact']);
Route::get('/product2',[ClientPageController::class,'product2']);
Route::get('/privacy',[ClientPageController::class,'privacy']);
Route::get('/product',[ClientPageController::class,'product']);

Route::get('/single/{id}',[ClientPageController::class,'single']);
Route::get('/single2',[ClientPageController::class,'single2']);
Route::get('/terms',[ClientPageController::class,'terms']);
Route::get('/faqs',[ClientPageController::class,'faqs']);
Route::get('/help',[ClientPageController::class,'help']);
Route::group(['middleware'=>'auth'], function() {
    Route::post('/logout', [LoginController::class, 'userLogout'])->name('user.logout');
    Route::get('/checkout',[ClientPageController::class,'checkout']);
    Route::get('/payment',[ClientPageController::class,'payment']);
    Route::get('/profile',[ClientPageController::class,'profile']);
    Route::get('/my-cart',[MyCart::class,'index']);
    Route::post('/updateprofile',[MyProfileController::class,'update']);
    Route::post('/addtocart/{id}',[MyCart::class,'addToCart']);
});