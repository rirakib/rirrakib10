<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ResumeController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\TestimonialController;
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



Route::get('/',[HomeController::class,'home'])->name('home');
Route::get('/about',[AboutController::class,'about'])->name('about');
Route::get('/resume',[ResumeController::class,'resume'])->name('resume');
Route::get('/service',[ServiceController::class,'service'])->name('service');
Route::get('/blog',[BlogController::class,'blog'])->name('blog');
Route::get('/projects',[ProjectController::class,'project'])->name('project');
Route::get('/contact',[ContactController::class,'contact'])->name('contact');

Route::get('rirrakib/login',[LoginController::class,'login'])->name('login');
Route::post('rirrakib/login',[LoginController::class,'login_check'])->name('login_check');
Route::get('rirrakib/logout',[LoginController::class,'logout'])->name('logout');

Route::group(['middleware'=>['login_check']],function(){
    Route::get('rirrakib/dashboard',[DashboardController::class,'dashboard'])->name('dashboard');
    Route::get('rirrakib/dashboard/message',[ContactController::class,'index'])->name('contact.index');
    Route::resource('rirrakib/dashboard/skill',SkillController::class,['name'=>'skill']);
    Route::resource('rirrakib/dashboard/service',ServiceController::class,['name'=>'services']);
    Route::resource('rirrakib/dashboard/testimonial',TestimonialController::class,['name'=>'testimonial']);
});


Route::post('/contact',[ContactController::class,'store'])->name('contact.store');
