<?php

use App\Http\Controllers\Web\EnquiryController;
use App\Http\Controllers\Web\HomeController;
use App\Http\Controllers\Web\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::post('/enquiry-submit', [EnquiryController::class, 'submit'])->name('enquiry.submit');
Route::get('{page}', [PageController::class, 'show'])->name('page.show');
