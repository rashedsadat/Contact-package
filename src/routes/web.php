<?php

use Illuminate\Support\Facades\Route;

Route::namespace('Testpkg\Contact\Http\Controllers')->group(function () {
    Route::controller('ContactController')->group(function () {
        Route::get('contact', 'index')->name('contact');
        Route::post('contact', 'send');
    });
});
