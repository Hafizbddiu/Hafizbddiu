<?php

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
Route::get('/add-category', [
    'uses'  =>  'categoryController@index',
    'as'    =>  'add-category'
]);


Route::get('/manage-category', [
    'uses'  =>  'categoryController@manageCategoryInfo',
    'as'    =>  'manage-category'
]);

Route::post('/category/save', [
    'uses'  =>  'categoryController@saveCategory',
    'as'    =>  'new-category'
]);
Route::get('/category/unpublished/{id}/{a}', [
    'uses'  =>  'categoryController@unpublishedCategoryInfo',
    'as'    =>  'unpublished-category'
]);
Route::get('/category/published/{id}', [
    'uses'  =>  'categoryController@publishedCategoryInfo',
    'as'    =>  'published-category'
]);
Route::get('/category/edit/{id}', [
    'uses'  =>  'categoryController@editCategoryInfo',
    'as'    =>  'edit-category'
]);
Route::post('/category/update', [
    'uses'  =>  'categoryController@updateCategoryInfo',
    'as'    =>  'update-category'
]);
Route::get('/category/delete/{id}', [
    'uses'  =>  'categoryController@deleteCategoryInfo',
    'as'    =>  'delete-category'
]);


Route::get('/add/brand', [
    'uses'  =>  'BrandController@addBrandInfo',
    'as'    =>  'add-brand'
]);
Route::get('/manage/brand', [
    'uses'  =>  'BrandController@manageBrandInfo',
    'as'    =>  'manage-brand'
]);
Route::post('/brand/save', [
    'uses'  =>  'BrandController@sveBrandInfo',
    'as'    =>  'new-brand'
]);
Route::get('/brand/unpublished/{id}/{a}', [
    'uses'  =>  'BrandController@unpublishedBrandInfo',
    'as'    =>  'unpublished-brand'
]);
Route::get('/brand/published/{id}', [
    'uses'  =>  'BrandController@publishedBrandInfo',
    'as'    =>  'published-brand'
]);
Route::get('/brand/edit/{id}', [
    'uses'  =>  'BrandController@editBrandInfo',
    'as'    =>  'edit-brand'
]);
Route::post('/brand/update', [
    'uses'  =>  'BrandController@updateBrandInfo',
    'as'    =>  'update-brand'
]);
Route::get('/brand/delete/{id}', [
    'uses'  =>  'BrandController@deleteBrandInfo',
    'as'    =>  'delete-brand'
]);





Route::get('/add/product', [
    'uses'  =>  'productController@index',
    'as'    =>  'add-product'
]);
Route::post('/product/save', [
    'uses'  =>  'productController@saveProduct',
    'as'    =>  'new-product'
]);

Route::get('/product/manage', [
    'uses'  =>  'productController@manageProduct',
    'as'    =>  'manage-product'
]);
Route::get('/product/unpublished/{id}/{a}', [
    'uses'  =>  'productController@unpublishedProductInfo',
    'as'    =>  'unpublished-product'
]);
Route::get('/product/published/{id}', [
    'uses'  =>  'productController@publishedProductInfo',
    'as'    =>  'published-product'
]);
Route::get('/product/edit/{id}', [
    'uses'  =>  'productController@editProductInfo',
    'as'    =>  'edit-product'
]);
Route::post('/product/update', [
    'uses'  =>  'productController@updateProductInfo',
    'as'    =>  'update-product'
]);
Route::get('/product/delete/{id}', [
    'uses'  =>  'productController@deleteProductInfo',
    'as'    =>  'delete-product'
]);
Route::get('/manage/order', [
    'uses'  =>  'orderController@manageOrder',
    'as'    =>  'manage-order'
]);








Route::get('/', [
    'uses'  =>  'NewShopController@index',
    'as'    =>  '/'
]);

Route::get('/category-product/{id}', [
    'uses'  =>  'NewShopController@categoryProduct',
    'as'    =>  'category-product'
]);
Route::get('/product-details/{id}', [
    'uses'  =>  'NewShopController@productDetails',
    'as'    =>  'product-details'
]);




Route:: get('/mail',[
    'uses'=>'NewShopController@mail',
    'as' =>'mail'
]);



Route::post('/addToCart', [
    'uses'  =>  'CartController@addToCart',
    'as'    =>  'add-to-cart'
]);
Route::get('/cart/show', [
    'uses'  =>  'CartController@showCart',
    'as'    =>  'show-cart'
]);
Route::get('/cart/delete/{id}', [
    'uses'  =>  'CartController@deleteCart',
    'as'    =>  'delete-cart-item'
]);
Route::post('/cart/update', [
    'uses'  =>  'CartController@updateCart',
    'as'    =>  'update-cart'
]);


Route::get('/checkout', [
    'uses'  =>  'checkoutController@index',
    'as'    =>  'checkout'
]);
Route::post('/customer/registration', [
    'uses'  =>  'checkoutController@customerSignUp',
    'as'    =>  'customer-sign-up'
]);

Route::post('/customer/login', [
    'uses'  =>  'checkoutController@customerLogin',
    'as'    =>  'customer-login'
]);

Route::post('/customer/logout', [
    'uses'  =>  'checkoutController@customerLogout',
    'as'    =>  'customer-logout'
]);
Route::get('/customer/new/login', [
    'uses'  =>  'checkoutController@newCustomerLogin',
    'as'    =>  'new-customer-login'
]);


Route::get('/checkout/shipping', [
    'uses'  =>  'checkoutController@shippingForm',
    'as'    =>  'checkout-shipping'
    
]);
Route::post('/shipping/save', [
    'uses'  =>  'checkoutController@saveShippingInfo',
    'as'    =>  'new-shipping'
    
]);
Route::get('/checkout/payment', [
    'uses'  =>  'checkoutController@paymentForm',
    'as'    =>  'checkout-payment'
    
]);
Route::post('/checkout/order', [
    'uses'  =>  'checkoutController@newOrder',
    'as'    =>  'new-order'
    
]);

Route::get('/complete/order', [
    'uses'  =>  'checkoutController@completeOrder',
    'as'    =>  'complete-order'
    
]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
