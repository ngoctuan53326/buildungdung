<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;   
use App\Http\Controllers\HdController;  
use App\Http\Controllers\TypeController; 
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\NccController; 
use App\Http\Controllers\HtkController; 


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


//đăng ký và đăng nhập của khách hàng
Route::get('dangky',[PageController::class,'getSignin'])->name('getsignin');
Route::post('dangky',[PageController::class,'postSignin'])->name('postsignin');

/*------ phần quản trị ----------*/
Route::get('admin/dangnhap',[UserController::class,'getLogin'])->name('admin.getLogin');
Route::post('admin/dangnhap',[UserController::class,'postLogin'])->name('admin.postLogin');
Route::get('admin/dangxuat',[UserController::class,'getLogout']);
Route::get('/', function () {
    return view('welcome');
});
Route::get('/contact', [ContactsController::class,'lienhe'])->name('lienhe'); // Hiển thị form liên hệ
Route::post('/contact', [ContactsController::class,'postContact'])->name('postLienhe'); // Xử lý dữ liệu gửi từ form liên hệ

Route::get('del1-to-cart/{id}',[PageController::class,'del1CartItem'])->name('banhang.del1ToCart');

Route::get('/tc',[PageController::class, 'index'])->name('tc');
Route::get('/',[PageController::class, 'index'])->name('trangchu.trangchu');
Route::get('/dienthoai',[PageController::class, 'dienthoai'])->name('dienthoai');
Route::get('tc/{id}',[PageController::class, 'producttype'])->name('producttype'); 
Route::get('/about', function () {return view('about');});
Route::get('/cart',[PageController::class,'cart'])->name('cart');
Route::get('/search',[PageController::class, 'search'])->name('search');
Route::get('ct/{id}',[PageController::class, 'show'])->name('show'); 

Route::get('add-to-cart/{id}',[PageController::class,'addToCart'])->name('banhang.addToCart');
Route::get('del-cart/{id}',[PageController::class,'delCartItem'])->name('banhang.xoagiohang');
Route::get('Checkout',[PageController::class,'getCheckout'])->name('banhang.getdathang');
Route::post('Checkout',[PageController::class,'postCheckout'])->name('banhang.postdathang');


Route::group(['prefix'=>'admin','middleware'=>'adminLogin'],function(){
   
    Route::group(['prefix'=>'category'],function(){
        // admin/category/danhsach
        Route::get('danhsach',[CategoryController::class,'getCateList'])->name('admin.getCateList');
        // admin/category/them
        Route::get('them',[CategoryController::class,'getCateAdd'])->name('admin.getCateAdd');
        Route::post('them',[CategoryController::class,'postCateAdd'])->name('admin.postCateAdd');
        Route::delete('xoa/{id}',[CategoryController::class,'getCateDelete'])->name('admin.getCateDelete');
        Route::get('sua/{id}',[CategoryController::class,'getCateEdit'])->name('admin.getCateEdit');
        Route::put('sua/{id}',[CategoryController::class,'postCateEdit'])->name('admin.postCateEdit');
    });
    Route::group(['prefix'=>'quanlyuser'],function(){
            Route::get('danhsach',[UserController::class,'index'])->name('admin.getUserList');
            Route::get('sua/{id}',[UserController::class,'edit'])->name('admin.getUserEdit');
            Route::put('sua/{id}',[UserController::class,'update'])->name('admin.postUserEdit');
            Route::delete('xoa/{id}',[UserController::class,'destroy'])->name('admin.getUserDelete');
    });
    Route::group(['prefix'=>'typeproducts'],function(){
            // admin/category/danhsach
            Route::get('danhsach',[TypeController::class,'getTypeList'])->name('admin.getTypeList');
            // admin/category/them
            Route::get('them',[TypeController::class,'getTypeAdd'])->name('admin.getTypeAdd');
            Route::post('them',[TypeController::class,'postTypeAdd'])->name('admin.postTypeAdd');
            Route::delete('xoa/{id}',[TypeController::class,'getTypeDelete'])->name('admin.getTypeDelete');
            Route::get('sua/{id}',[TypeController::class,'getTypeEdit'])->name('admin.getTypeEdit');
            Route::put('sua/{id}',[TypeController::class,'postTypeEdit'])->name('admin.postTypeEdit');
    });
    Route::group(['prefix'=>'contacts'],function(){
            Route::get('danhsach',[ContactsController::class,'listLhAll'])->name('admin.listLhAll');
            // admin/bill/{status}
            Route::get('{status}',[ContactsController::class,'getLhList'])->name('admin.getLhList');
            //phần bill này không nhất thiết phải dùng request ajax, làm như những hàm bình thường, phần route này cô vẫn để lại để tham khảo
            //by laravel request
            Route::get('{id}/{status}',[ContactsController::class,'updateLhStatus'])->name('admin.updateLhStatus');
            //by ajax request
            Route::post('updatelh/{id}', [ContactsController::class, 'updateLhStatusAjax'])->name('admin.updateLhStatusAjax');
           
            Route::delete('deletelh/{id}',[ContactsController::class,'cancelLh'])->name('admin.cancelLh');
    });
    Route::group(['prefix'=>'ncc'],function(){
        // admin/category/danhsach
        Route::get('danhsach',[NccController::class,'getNccList'])->name('admin.getNccList');
        // admin/category/them
        Route::get('them',[NccController::class,'getNccAdd'])->name('admin.getNccAdd');
        Route::post('them',[NccController::class,'postNccAdd'])->name('admin.postNccAdd');
        Route::delete('xoa/{id}',[NccController::class,'getNccDelete'])->name('admin.getNccDelete');
        Route::get('sua/{id}',[NccController::class,'getNCcEdit'])->name('admin.getNccEdit');
        Route::put('sua/{id}',[NccController::class,'postNccEdit'])->name('admin.postNccEdit');
    });
    Route::group(['prefix'=>'hoadon'],function(){
        // admin/category/danhsach
        Route::get('danhsach',[HdController::class,'getHdList'])->name('admin.getHdList');
        // admin/category/them
        Route::get('them',[HdController::class,'getHdAdd'])->name('admin.getHdAdd');
        Route::post('them',[HdController::class,'postHdAdd'])->name('admin.postHdAdd');
        Route::delete('xoa/{id}',[HdController::class,'getHdDelete'])->name('admin.getHdDelete');
        Route::get('sua/{id}',[HdController::class,'getHdEdit'])->name('admin.getHdEdit');
        Route::put('sua/{id}',[HdController::class,'postHdEdit'])->name('admin.postHdEdit');
    });
    Route::group(['prefix'=>'hangtonkhos'],function(){
        // admin/category/danhsach
        Route::get('danhsach',[HtkController::class,'getHtkList'])->name('admin.getHtkList');
        // admin/category/them
        Route::get('them',[HtkController::class,'getHtkAdd'])->name('admin.getHtkAdd');
        Route::post('them',[HtkController::class,'postHtkAdd'])->name('admin.postHtkAdd');
        Route::delete('xoa/{id}',[HtkController::class,'getHtkDelete'])->name('admin.getHtkDelete');
        Route::get('sua/{id}',[HtkController::class,'getHtkEdit'])->name('admin.getHtkEdit');
        Route::put('sua/{id}',[HtkController::class,'postHtkEdit'])->name('admin.postHtkEdit');
});
});