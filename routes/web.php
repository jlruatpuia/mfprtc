<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\TrainingsController;
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



Route::get('/test', function () {
    return view('test');
});
Route::get('/home', function() {
    return view('home_x');
});
//Route::get('/admin/dashboard', function() {
//    return view('admin.index');
//});

/* Front Page - No Authorization */
Route::get('/', [ProductsController::class, 'index'])->name('home');
Route::get('/hostel-rules', function() { return view('front.hostel_rules'); }) ->name('hostel');
Route::get('/introductory-video', function() { return view('front.introductory_video'); }) ->name('video');
Route::get('/mission-statement', function() { return view('front.mission_statement'); }) ->name('mission');
Route::get('/management-team', function() { return view('front.management_team'); }) ->name('management');
Route::get('/photo-gallery', [ HomeController::class, 'photo_gallery'])->name('gallery');
Route::get('/product/{id}', [ProductsController::class, 'show'])->name('product.show');
Route::get('/cart', [ProductsController::class, 'cart'])->name('cart');
Route::get('/cart/add/{id}', [ProductsController::class, 'addToCart'])->name('addToCart');
Route::patch('/cart/update', [ProductsController::class, 'updateCart']);
Route::delete('/cart/remove', [ProductsController::class, 'removeCart']);
Route::get('/training-application', [HomeController::class, 'apply_training']) -> name('training.application');
Route::get('/training-feedback', function (){ return view('front.training_feedback'); }) -> name('training.feedback');
Route::post('/apply-training', [TrainingsController::class, 'store'])->name('training.apply');
Route::get('/invoice', function() { return view('front.invoice'); });
/*End of Front Page */
Auth::routes();

/* Admin Pages - With Authorization */
Route::get('/admin/home', [AdminController::class, 'index'])->name('admin.index');
Route::get('/admin/products', [AdminController::class, 'product_index'])->name('admin.products');
Route::get('/admin/product/new', [AdminController::class, 'product_create'])->name('admin.product.new');
Route::post('/admin/product/store', [AdminController::class, 'product_store'])->name('admin.product.store');
Route::get('/admin/product/{id}/edit', [AdminController::class, 'product_edit'])->name('admin.product.edit');
Route::match(['put', 'patch'], '/admin/product/{id}/update', [AdminController::class, 'product_update'])->name('admin.product.update');
Route::get('/admin/product/{id}/delete', [AdminController::class, 'product_delete'])->name('admin.product.delete');

Route::get('/admin/trainings', [AdminController::class, 'trainings_index'])->name('admin.trainings');
Route::get('/admin/training/new', [AdminController::class, 'training_create'])->name('admin.training.new');
Route::post('/admin/training/store', [AdminController::class, 'training_store'])->name('admin.training.store');
Route::get('/admin/training/{id}/edit', [AdminController::class, 'training_edit'])->name('admin.training.edit');
Route::match(['put', 'patch'], '/admin/training/{id}/update', [AdminController::class, 'training_update'])->name('admin.training.update');
Route::get('/admin/training/{id}/delete', [AdminController::class, 'training_delete'])->name('admin.training.delete');
Route::get('/admin/trainings/applications', [TrainingsController::class, 'index'])->name('admin.trainings.applications');
Route::get('/admin/trainings/applicants', [TrainingsController::class, 'getApplicants'])->name('admin.trainings.applications_by_course');
Route::get('/admin/trainings/applicants2/{id}', [TrainingsController::class, 'getApplicants2'])->name('admin.trainings.applications_by_course2');
Route::get('/admin/trainings/applicant/{id}', [TrainingsController::class, 'getApplicant'])->name('admin.trainings.applicant');
//Route::post('/admin/trainings/applications', [TrainingsController::class, 'getApplicants'])->name('admin.trainings.applications_by_course');
Route::get('admin/photos', [AdminController::class, 'photos_index'])->name('admin.photos');
Route::get('admin/photo/new', [AdminController::class, 'photo_create'])->name('admin.photo.new');
Route::post('admin/photo/store', [AdminController::class, 'photo_store'])->name('admin.photo.store');
Route::get('admin/photo/{id}/delete', [AdminController::class, 'photo_delete'])->name('admin.photo.delete');
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
