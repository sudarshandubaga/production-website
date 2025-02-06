<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EnquiryController as ControllersEnquiryController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\PageController as ControllersPageController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\StudioCategoryController;
use App\Http\Controllers\StudioController;
use App\Http\Controllers\SyndicationController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\VfxController;
use App\Http\Controllers\Web\EnquiryController;
use App\Http\Controllers\Web\HomeController;
use App\Http\Controllers\Web\PageController;
use App\Http\Controllers\WorkVideoController;
use Illuminate\Support\Facades\Route;

Route::group([
    'prefix' => 'fff-panel',
], function () {
    Route::get('/login', [LoginController::class, 'showLogin'])->name('login');
    Route::post('/login', [LoginController::class, 'doLogin']);


    Route::group([
        'middleware' => 'auth',
        'as' => 'admin.'
    ], function () {
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
        Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
        Route::get('/site-setting', [SiteController::class, 'create'])->name('site.edit');
        Route::put('/site-setting', [SiteController::class, 'update'])->name('site.update');

        Route::resources([
            'slider'            => SliderController::class,
            'faq'               => FaqController::class,
            'enquiry'           => ControllersEnquiryController::class,
            'blog'              => BlogController::class,
            'page'              => ControllersPageController::class,
            'team'              => TeamController::class,
            'movie'             => MovieController::class,
            'vfx'               => VfxController::class,
            'studio-category'   => StudioCategoryController::class,
            'studio'            => StudioController::class,
            'syndication'       => SyndicationController::class,
            'work-video'        => WorkVideoController::class,
        ]);
    });
});

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::post('/enquiry-submit', [EnquiryController::class, 'submit'])->name('enquiry.submit');
Route::get('{page}', [PageController::class, 'show'])->name('page.show');
