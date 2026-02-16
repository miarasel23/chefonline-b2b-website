<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FontEnd\FontEndController;




Route::get('/', [FontEndController::class, 'index'])->name('index');
Route::get('/services', [FontEndController::class, 'services'])->name('services');
Route::get('/online-ordering-system', [FontEndController::class, 'onlineOrderingSystem'])->name('online-ordering-system');
Route::get('/cloud-epos-system', [FontEndController::class, 'cloudEposSystem'])->name('cloud-epos-system');
Route::get('/digital-marketing', [FontEndController::class, 'digitalMarketing'])->name('digital-marketing');
Route::get('/print-media', [FontEndController::class, 'printMedia'])->name('print-media');
Route::get('/videos', [FontEndController::class, 'videos'])->name('videos');
Route::get('/photo', [FontEndController::class, 'photo'])->name('photo');
Route::get('/news', [FontEndController::class, 'news'])->name('news');
Route::get('/offer/black-friday/2024', [FontEndController::class, 'blackFriday2024'])->name('black-friday-2024');
Route::get('/offer/new-year/2024', [FontEndController::class, 'newYear2024'])->name('new-year-2024');
Route::get('/offer/valentine-offer/2025', [FontEndController::class, 'valentineOffer2025'])->name('valentine-offer-2025');
Route::get('/portfolio', [FontEndController::class, 'portfolio'])->name('portfolio');
Route::get('/associate-partners', [FontEndController::class, 'partners'])->name('partners');
Route::get('/contact', [FontEndController::class, 'contact'])->name('contact');
Route::get('/partner', [FontEndController::class, 'fromPartner'])->name('from-partner');
