<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\PrintersController;
use App\Http\Controllers\HomeController;
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

Route::get('admin/brand',[BrandController::class, 'index']);
Route::post('admin/brand/store',[BrandController::class, 'store']);
Route::get('admin/brand/create',[BrandController::class, 'create']);
Route::get('admin/brand/edit/{id}',[BrandController::class, 'edit']);
Route::post('admin/brand/update',[BrandController::class, 'update']);
Route::get('admin/brand/delete/{id}',[BrandController::class, 'delete']);

Route::get('admin/brand/issues',[BrandController::class, 'issues']);
Route::post('admin/brand/issuestore',[BrandController::class, 'issuestore']);
Route::get('admin/brand/issuecreate',[BrandController::class, 'issuecreate']);
Route::get('admin/brand/issueedit/{id}',[BrandController::class, 'issueedit']);
Route::post('admin/brand/issueupdate',[BrandController::class, 'issueupdate']);
Route::get('admin/brand/issuedelete/{id}',[BrandController::class, 'issuedelete']);

Route::get('admin/blog',[BlogController::class, 'index']);
Route::post('admin/blog/store',[BlogController::class, 'store']);
Route::get('admin/blog/create',[BlogController::class, 'create']);
Route::get('admin/blog/edit/{id}',[BlogController::class, 'edit']);
Route::post('admin/blog/update',[BlogController::class, 'update']);
Route::get('admin/blog/delete/{id}',[BlogController::class, 'delete']);
Route::post('admin/blog/savefaq',[BlogController::class,'savefaq']);

Route::get('admin/printer',[PrintersController::class, 'index']);
Route::post('admin/printer/store',[PrintersController::class, 'store']);
Route::get('admin/printer/create',[PrintersController::class, 'create']);
Route::get('admin/printer/edit/{id}',[PrintersController::class, 'edit']);
Route::post('admin/printer/update',[PrintersController::class, 'update']);
Route::get('admin/printer/delete/{id}',[PrintersController::class, 'delete']);
Route::post('admin/printer/savefaq',[PrintersController::class,'savefaq']);
Route::post('admin/printer/saveerror',[PrintersController::class,'saveerror']);
Route::post('admin/printer/savefeatures',[PrintersController::class,'savefeature']);


Route::resource('admin/testimonials', TestimonialController::class);
Route::get('admin/testimonials/delete/{id}',[TestimonialController::class,'destroy']);

Route::get('admin/settings', [AdminController::class,'settings']);
Route::post('admin/settings/save', [AdminController::class,'savesettings']);
Route::get('admin/sociallinks', [AdminController::class,'sociallinks']);
Route::post('admin/settings/updatesociallinks', [AdminController::class,'updatesociallinks']);

Auth::routes(['verify'=>true]);

Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout']);
Route::get('/admin',[AdminController::class, 'index'])->name('admin');

Route::get('/',[FrontController::class,'index'])->name('home');
Route::get('contact',[FrontController::class,'contact'])->name('contact');
Route::post('contact',[FrontController::class,'submitcontact']);
Route::get('support',[FrontController::class,'support'])->name('support');
Route::get('knowledgebase',[FrontController::class,'blog'])->name('blog');
Route::get('knowledgebase/{slug}',[FrontController::class,'blogdetail']);

Route::post('homesearch',[FrontController::class,'homesearch'])->name('homesearch');
Route::post('homesearchprinter',[FrontController::class,'homesearchprinter'])->name('homesearchprinter');
Route::get('{slug1}/{slug2}',[FrontController::class, 'printerdetails']);
Route::get('{slug}',[FrontController::class, 'details']);
// Route::get('/home', [HomeController::class, 'index'])->name('home');
// Route::get('/knowledgebase', [HomeController::class, 'blog'])->name('blog');
