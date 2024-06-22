<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\user_controller;
use App\Http\Controllers\service_provider;
use App\Http\Controllers\categories;
use App\Http\Auth\LoginController;

use App\Http\Controllers\login_controller;
use App\Http\Controllers\main\index_controller;
use App\Http\Controllers\main\service_provider_controller;
use App\Http\Controllers\main\services_controller;
use App\Http\Controllers\main\bookings_controller;
use App\Http\Controllers\main\profile_controller;
use App\Http\Controllers\banners;
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
    return view('welcome');
});

Auth::routes();
Route::get('/home',[index_controller::class, 'index']);
//Route::get('/home', [App\Http\Controllers\main\index_controller::class, 'index'])->name('home')->middleware('user');

Route::get('/email/verify', [App\Http\Controllers\Auth\ResetController::class, 'verify_email'])->name('verify');

Route::post('login/{provider}/callback', 'Auth\LoginController@handleCallback');

Route::resource('/password/reset', App\Http\Controllers\Auth\ResetController::class);

Route::get('/index',[index_controller::class, 'index']);
Route::post('profile',[profile_controller::class, 'update'])->name('profile');
Route::get('/book', [bookings_controller::class, 'book'])->name('book');
Route::get('/service_provider/{category}', [service_provider_controller::class, 'get'])->name('service_provider');

Route::get('/crud', function () {
    return view('crud.index');
});

Route::get('/about-us', function () {
    return view('about-us');
    });
Route::get('/contact', function () {
    return view('contact');
    });
// Route::get('/service', function () {
//     return view('service');
//     });
Route::get('/service',[services_controller::class, 'index']);
Route::get('/Bookings', [bookings_controller::class, 'index']);
Route::get('/project-details', function () {
        return view('project-details');
        });
Route::get('/service-details/{doc_id}', [bookings_controller::class, 'booking_details'])->name('service.details');

Route::get('blog', function () {
    return view('blog');
    });
Route::get('blog-details', function () {
    return view('blog-details');
    });
Route::get('profile', [profile_controller::class, 'index']);
Route::get('update_profile', function () {
    return view('update_profile');
        });
Route::get('/service-providers/',[service_provider_controller::class, 'index']);

// Route::get('service-providers', function () {
//     return view('service-providers');
//         });
Route::get('code', function () {
        return view('code');
        });
// Route::post('/admin/category/update/{category}', [categories::class, 'update'])->name('admin.category.update');
Route::get('/admin/category/update/{category}', [categories::class, 'get' ])->name('category.get');
// Route::resource('/crud', App\Http\Controllers\CrudController::class);

Route::get('admin/', function () {
    return view('admin.login');
    });
    Route::post('admin/login',[login_controller::class, 'index']);
    Route::get('admin/index',[App\Http\Controllers\index_controller::class, 'index']);
// user get and delete

Route::get('admin/users', [user_controller::class, 'index']);
Route::delete('/admin/users/{user}', [user_controller::class, 'destroy'])->name('admin.users.destroy');

// service provider get and delete
Route::get('admin/vendor', [service_provider::class, 'index']);
Route::delete('/admin/vendor/{vendor}', [service_provider::class, 'destroy'])->name('admin.vendor.destroy');


Route::delete('/admin/category/{category}', [categories::class, 'destroy'])->name('admin.category.destroy');
Route::get('admin/category', [categories::class, 'index']);
Route::post('/admin/category/popular/{category}', [categories::class, 'make_popular'])->name('admin.category.popular');
Route::post('/admin/category/update/{category}', [categories::class, 'update'])->name('admin.category.update');

Route::get('admin/Popular_category',[categories::class, 'p_category']);
Route::delete('/admin/popular_category/{category}', [categories::class, 'p_destroy'])->name('admin.p_category.destroy');


Route::get('admin/banners',[banners::class, 'index']);
Route::delete('/admin/banners/{banner}', [banners::class, 'destroy'])->name('admin.banners.destroy');
                        Route::get('admin/update', function () {
                            return view('admin.update');
                            });
                            Route::get('admin/Update_password', function () {
                                return view('admin.password');
                                });
                                Route::get('admin/add_banner', function () {
                                    return view('admin.add_banner');
                                    });
