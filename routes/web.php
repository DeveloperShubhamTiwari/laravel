<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\Dashboard;
use App\Http\Controllers\Admin\Skills;
use App\Http\Controllers\Admin\Education;
use App\Http\Controllers\Admin\Experience;
use App\Http\Controllers\Admin\Services;
use App\Http\Controllers\Admin\Testimonials;
use App\Http\Middleware\AdminAuth;
use App\Http\Controllers\Home;

// Authentication routes
Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('check-login', [AuthController::class, 'checkLogin'])->name('checkLogin');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

    


// Admin routes with authentication middleware
Route::prefix('admin')->middleware([AdminAuth::class])->group(function () {
    Route::get('/', [Dashboard::class, 'index'])->name('admin.dashboard');
    
    // Route::get('/skills', [Skills::class, 'view'])->name('admin.skills.view');
    Route::get('/skills/add', [Skills::class, 'index'])->name('admin.skills.add');
    Route::get('/skills/edit/{id}', [Skills::class, 'index'])->name('admin.skills.edit');
    Route::post('/skills/save/{id?}', [Skills::class, 'save'])->name('admin.skills.save');
    Route::get('/skills/delete/{id}', [Skills::class, 'delete'])->name('admin.skills.delete');

    Route::get('/education', [Education::class, 'view'])->name('admin.education.view');
    Route::get('/education/add', [Education::class, 'index'])->name('admin.education.add');
    Route::get('/education/edit/{id}', [Education::class, 'index'])->name('admin.education.edit');
    Route::post('/education/save/{id?}', [Education::class, 'save'])->name('admin.education.save');
    Route::get('/education/delete/{id}', [Education::class, 'delete'])->name('admin.education.delete');

    Route::get('/experience', [Experience::class, 'view'])->name('admin.experience.view');
    Route::get('/experience/add', [Experience::class, 'index'])->name('admin.experience.add');
    Route::get('/experience/edit/{id}', [Experience::class, 'index'])->name('admin.experience.edit');
    Route::post('/experience/save/{id?}', [Experience::class, 'save'])->name('admin.experience.save');
    Route::get('/experience/delete/{id}', [Experience::class, 'delete'])->name('admin.experience.delete');

    Route::get('/services', [Services::class, 'view'])->name('admin.services.view');
    Route::get('/services/add', [Services::class, 'index'])->name('admin.services.add');
    Route::get('/services/edit/{id}', [Services::class, 'index'])->name('admin.services.edit');
    Route::post('/services/save/{id?}', [Services::class, 'save'])->name('admin.services.save');
    Route::get('/services/delete/{id}', [Services::class, 'delete'])->name('admin.services.delete');

    Route::get('/testimonials', [Testimonials::class, 'view'])->name('admin.testimonials.view');
    Route::get('/testimonials/add', [Testimonials::class, 'index'])->name('admin.testimonials.add');
    Route::get('/testimonials/edit/{id}', [Testimonials::class, 'index'])->name('admin.testimonials.edit');
    Route::post('/testimonials/save/{id?}', [Testimonials::class, 'save'])->name('admin.testimonials.save');
    Route::get('/testimonials/delete/{id}', [Testimonials::class, 'delete'])->name('admin.testimonials.delete');
});





// Frontend Routes
Route::group([], function () {
    Route::get('/', [Home::class, 'index']);
    Route::get('/blog', [Home::class, 'blog']);
    Route::get('/publication', [Home::class, 'publication']);
    Route::get('/prices', [Home::class, 'prices']);
    Route::get('/portfolio', [Home::class, 'portfolio']);
    Route::get('/project', [Home::class, 'project']);
    Route::get('/contact', [Home::class, 'contact']);
});