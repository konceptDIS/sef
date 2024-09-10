<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CompanyDetailController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\WebPageController;
use Illuminate\Support\Facades\Route;

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

Route::get('/gallery', function () {
    return view('gallery');
}) ->name('gallery');

Route::get('/donate', function () {
    return view('donate');
}) ->name('donate');

Route::get('/blog-details', function () {
    return view('blog-details');
}) ->name('blog-details');

Route::get('/children', function () {
    return view('children');
}) ->name('children');

Route::get('/empowerment', function () {
    return view('empowerment');
}) ->name('empowerment');

Route::get('/civic', function () {
    return view('civic');
}) ->name('civic');

Route::get('/charity_ball', function () {
    return view('charity_ball');
}) ->name('charity_ball');

Route::get('/sallah_party', function () {
    return view('sallah_party');
}) ->name('sallah_party');

Route::get('/health', function () {
    return view('health');
}) ->name('health');

Route::controller(PostController::class)->group(function () {
    Route::get('/b/{slug}', 'viewPost')->name('home.viewBlogPost');
    // Route::get('/blog', 'blog')->name('home.blog');
});

Route::controller(WebPageController::class)->group(function () {
    Route::get('/', 'home')->name('index');
    Route::get('/about', 'about')->name('about');
    Route::get('/team', 'team')->name('team');
    Route::get('/blog', 'blog')->name('blog');
    Route::get('/contact', 'contact')->name('contact');
});

Route::post('/contact', [ContactController::class, 'contact'])->name('contact');

Route::middleware('guest')->group(function () {
    //Login Routes
    Route::controller(LoginController::class)->group(function () {
        Route::get('/admin/login', 'login')->name('login');
        Route::post('/admin/login', 'attemptLogin');
    });
});

Route::group(['middleware' => 'auth'], function () {
    Route::controller(AdminController::class)->group(function () {
        Route::get('/admin/dashboard', 'dashboard')->name('admin.dashboard');
    });
    Route::controller(CompanyDetailController::class)->group(function () {
        Route::get('/setup', 'index')->name('admin.setup');
        Route::post('/setup', 'update')->name('admin.setup.save');
    });
    Route::controller(LoginController::class)->group(function () {
        Route::get('/logout', 'logout')->name('logout');
    });
    Route::controller(CategoryController::class)->group(function () {
        Route::post('/admin/addCategory', 'addCategory')->name('admin.addCategory');
        Route::get('/admin/categories', 'categories')->name('admin.categories');
        Route::get('/admin/delete-category/{id}', 'destroy')->name('admin.deleteCategory');
        Route::get('/admin/get-category/{id}', 'getCategory');
        Route::post('/admin/update-category', 'update')->name('admin.updateCategory');
    });
    Route::controller(PostController::class)->group(function () {
        Route::get('/admin/posts', 'index')->name('admin.posts');
        Route::get('/admin/editPost/{post_id}', 'edit')->name('admin.editPost');
        Route::post('/admin/editPost/{post_id}', 'update');
        Route::post('/admin/savePost', 'store')->name('admin.savePost');
    });
    Route::controller(SettingController::class)->group(function () {
        Route::get('/admin/settings', 'index')->name('admin.settings');
        Route::post('/admin/save-settings', 'store')->name('admin.saveSettings');
    });
    Route::controller(PageController::class)->group(function () {
        Route::get('/admin/pages', 'index')->name('admin.pages');
        Route::post('/admin/save-page', 'store')->name('admin.savePage');
        Route::get('/admin/editPage/{page_id}', 'edit')->name('admin.editPage');
        Route::post('/admin/update-page', 'update')->name('admin.updatePage');
    });

    Route::controller(ImageController::class)->group(function () {
        Route::get('/admin/images', 'index')->name('admin.images');
        Route::get('/admin/delete-image/{file}', 'destroy');
        Route::post('/admin/uploadImage', 'store')->name('admin.uploadImage');
    });

    Route::controller(SliderController::class)->group(function () {
        Route::get('/admin/sliders', 'index')->name('admin.sliders');
        Route::post('/admin/save-slider', 'store')->name('admin.saveSlider');
        Route::get('/admin/delete-slider/{id}', 'destroy')->name('admin.deleteSlider');
    });

});

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
