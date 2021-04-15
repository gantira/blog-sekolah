<?php

use App\Http\Controllers\Admin\{CategoryController, DashboardController, GalleryController as AdminGalleryController, PostController, RegistrationController, TagController};
use App\Http\Controllers\{ArticleController, ContactController, GalleryController};
use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->prefix('bagas')->name('bagas.')->group(function () {

    Route::name('')->group(function () {
        Route::get('', [DashboardController::class, 'index'])->name('index');
    });

    Route::prefix('posts')->name('posts.')->group(function () {
        Route::get('', [PostController::class, 'index'])->name('index');
        Route::post('', [PostController::class, 'store'])->name('store');
        Route::get('create', [PostController::class, 'create'])->name('create');
        Route::get('{post}', [PostController::class, 'edit'])->name('edit');
        Route::put('{post}', [PostController::class, 'update'])->name('update');
        Route::delete('{post}', [PostController::class, 'destroy'])->name('delete');
    });

    Route::prefix('categories')->name('categories.')->group(function () {
        Route::get('', [CategoryController::class, 'index'])->name('index');
        Route::post('', [CategoryController::class, 'store'])->name('store');
        Route::get('create', [CategoryController::class, 'create'])->name('create');
        Route::get('{category}', [CategoryController::class, 'edit'])->name('edit');
        Route::put('{category}', [CategoryController::class, 'update'])->name('update');
        Route::delete('{category}', [CategoryController::class, 'destroy'])->name('delete');
    });

    Route::prefix('tags')->name('tags.')->group(function () {
        Route::get('', [TagController::class, 'index'])->name('index');
        Route::post('', [TagController::class, 'store'])->name('store');
        Route::get('create', [TagController::class, 'create'])->name('create');
        Route::get('{tag}', [TagController::class, 'edit'])->name('edit');
        Route::put('{tag}', [TagController::class, 'update'])->name('update');
        Route::delete('{tag}', [TagController::class, 'destroy'])->name('delete');
    });

    Route::prefix('registrations')->name('registrations.')->group(function () {
        Route::get('', [RegistrationController::class, 'index'])->name('index');
        Route::get('export', [RegistrationController::class, 'export'])->name('export');
        Route::post('export', [RegistrationController::class, 'exportExcel'])->name('exportExcel');
        Route::post('', [RegistrationController::class, 'store'])->name('store');
        Route::get('create', [RegistrationController::class, 'create'])->name('create');
        Route::get('{registration}', [RegistrationController::class, 'edit'])->name('edit');
        Route::put('{registration}', [RegistrationController::class, 'update'])->name('update');
        Route::delete('{registration}', [RegistrationController::class, 'destroy'])->name('delete');
    });

    Route::prefix('galleries')->name('galleries.')->group(function () {
        Route::get('', [AdminGalleryController::class, 'index'])->name('index');
        Route::get('export', [AdminGalleryController::class, 'export'])->name('export');
        Route::post('export', [AdminGalleryController::class, 'exportExcel'])->name('exportExcel');
        Route::post('', [AdminGalleryController::class, 'store'])->name('store');
        Route::get('create', [AdminGalleryController::class, 'create'])->name('create');
        Route::get('{gallery}', [AdminGalleryController::class, 'edit'])->name('edit');
        Route::put('{gallery}', [AdminGalleryController::class, 'update'])->name('update');
        Route::delete('{gallery}', [AdminGalleryController::class, 'destroy'])->name('delete');
    });
});

// FrontEnd
Route::prefix('articles')->name('articles.')->group(function () {
    Route::get('', [ArticleController::class, 'index'])->name('index');
    Route::get('{post:slug}', [ArticleController::class, 'show'])->name('show');
});

Route::prefix('contacts')->name('contacts.')->group(function () {
    Route::get('', [ContactController::class, 'index'])->name('index');
});

Route::prefix('galleries')->name('galleries.')->group(function () {
    Route::get('', [GalleryController::class, 'index'])->name('index');
    Route::get('{gallery:slug}', [GalleryController::class, 'show'])->name('show');
});
