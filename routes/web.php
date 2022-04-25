<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DetailsController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OptionHomeAdminController;
use App\Http\Controllers\OrderController;
use Faker\Guesser\Name;

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

Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/productos/{nameCategorieHome}/{idCategorieHome}',[ProductController::class,'index'])->name('index-initial-product');
Route::get('/productos/todos',[ProductController::class,'allCategories'])->name('allCategoriesNow');
Route::get('/productos/detalles-{idProduct}',[DetailsController::class,'index'])->name('details-product');
// Ajax paginacion
Route::get('/fetch1-productos/{nameCategorieHome}/{idCategorieHome}',[ProductController::class,'fetchPaginate']);
// Ajax filter
// Route::get('/filter-productos/{nameCategorieHome}-{idCategorieHome}',[ProductController::class,'productFilter']);
// Buscador
Route::get('/product-search',[ProductController::class,'searchProduct'])->name('product-search-now');


Auth::routes();

Route::get('/productos',[ProductController::class,'showProductCategories'] )->name('products');

Route::get('/producto/detalle',function(){
    return view('producto/detailsProduct');
})->name('details');


Route::get('/checkout-product',function(){
    return view('producto/checkoutProduct');
})->name('checkout-product');

// Route::get('/checkout-product/payment',function(){
//     return view('producto/paymentProduct');
// })->name('payment');


Route::get('/conocenos',function(){
    return view('aboutUs');
})->name('aboutUs');

// Carrito de compras
Route::resource('/cart', CartController::class);
Route::get('/cart-clear',[CartController::class,'clearCart'])->name('clear-cart');
Route::get('/cart-shipping',[CartController::class,'shippingCalculate']);

// Order
Route::post('/cart/order-send',[OrderController::class,'registerOrder'])->name('registerOrder');


// Seccion administradora
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin/section',[AdminController::class,'index'])->name('index-admin');
    Route::get('/admin/products',[AdminController::class,'showProduct'] )->name('product-admin');
    Route::post('/admin/products',[AdminController::class,'registerProduct'] )->name('registerProduct-now');
    Route::get('/admin/registerProducts',[AdminController::class,'showRegisterProduct'])->name('registerProduct-admin');
    
    Route::get('/admin/charts',function(){
        return view('admin/charts');
    });
    Route::delete('/admin/products/delete-{id}',[AdminController::class,'destroy'])->name('productAdmin.destroy');
    Route::put('/admin/products/edit-{id}',[AdminController::class,'editProduct'])->name('productAdmin.edit');
    Route::get('/admin/promociones', [AdminController::class,'offerNow'])->name('product-offer');
    Route::post('/admin/promociones/desactive-{id}',[AdminController::class,'offerDesactive'])->name('product-offer-desactive');
    Route::post('/admin/promociones/active-{id}',[AdminController::class,'offerActive'])->name('product-offer-active');
    Route::get('/admin/pedidos',[AdminController::class,'getPedidos'])->name('show-all-pedidos');
    Route::get('/admin/pedidos-export-excel',[AdminController::class,'exportExcelOrder'])->name('export-excel-order');
    Route::get('/admin/export-excel-order-unit-{id}-{quantity}',[AdminController::class,'exportExcelOrderUnit'])->name('export-excel-order-unit');
    Route::get('/admin/export-excel-product-unit-{id}-{quantity}',[AdminController::class,'exportExcelProductUnit'])->name('export-excel-product-unit');
    Route::get('/admin/home-admin',[OptionHomeAdminController::class,'index'])->name('index-admin-home-option');
    Route::put('/admin/home-admin-carousel/edit',[OptionHomeAdminController::class,'editCarousel'])->name('index-admin-home-edit');

    Route::get('/admin/categories-show',[OptionHomeAdminController::class,'showCategorie'])->name('categoriesShow');    
    Route::post('/admin/home-admin-categories/create',[OptionHomeAdminController::class,'createCategorie'])->name('createCategories');
    Route::delete('/admin/home-admin-categories/delete-{id}',[OptionHomeAdminController::class,'deleteCategorie'])->name('categorieDelete');
    Route::put('/admin/home-admin-categories/edit/{id}',[OptionHomeAdminController::class,'editCategorie'])->name('categorieEdit');
});
