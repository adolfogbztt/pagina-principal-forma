<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('corporativo');
});

Route::get('/corporativo/cartografia', function () {
    return view('pages.corporativo.cartografia');
});

Route::get('/corporativo/termografia', function () {
    return view('pages.corporativo.termografia');
});

Route::get('/corporativo/fotogrametria', function () {
    return view('pages.corporativo.fotogrametria');
});
