<?php

use App\Http\Controllers\MobilController;

Route::get('/', function () {
    return redirect('/mobil');
});

Route::resource('mobil', MobilController::class);