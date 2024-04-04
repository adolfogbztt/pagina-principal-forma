<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('corporativo');
});

Route::get('/corporativo/cartografia', function () {
    return view('pages.corporativo.cartografia');
});
