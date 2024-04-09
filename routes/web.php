<?php

use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('corporativo');
});

// Route::get('/citas', function () {
//     return view('citas');
// });

Route::get('/colegios', function () {
    return view('colegio');
});

Route::get('/cookies', function () {
    return view('pages.cookies');
});

// Corporativo
Route::get('/corporativo/cartografia', function () {
    return view('pages.corporativo.cartografia');
});

Route::get('/corporativo/termografia', function () {
    return view('pages.corporativo.termografia');
});

Route::get('/corporativo/fotogrametria', function () {
    return view('pages.corporativo.fotogrametria');
});

Route::get('/corporativo/corporativo', function () {
    return view('pages.corporativo.corporativo');
});

// Fotografia Digital
Route::get('/fotografia/corporativo', function () {
    return view('pages.fotografia.f_corporativo');
});

Route::get('/fotografia/productos', function () {
    return view('pages.fotografia.f_productos');
});

Route::get('/fotografia/publicidad', function () {
    return view('pages.fotografia.f_publicidad');
});

Route::get('/fotografia/fotografia', function () {
    return view('pages.fotografia.f_fotografia');
});

// Video-Corporativo
Route::get('/video-corporativo/conferencias', function () {
    return view('pages.video-corporativo.conferencias');
});

Route::get('/video-corporativo/documentales', function () {
    return view('pages.video-corporativo.documentales');
});

Route::get('/video-corporativo/eventos', function () {
    return view('pages.video-corporativo.eventos');
});

Route::get('/video-corporativo/induccion', function () {
    return view('pages.video-corporativo.induccion');
});

Route::get('/video-corporativo/institucional', function () {
    return view('pages.video-corporativo.institucional');
});

Route::get('/video-corporativo/spot_publicitario', function () {
    return view('pages.video-corporativo.spot_publicitario');
});

// Streaming & Tours 360
Route::get('/streaming-tours360/streaming', function () {
    return view('pages.streaming-tours360.streaming');
});

Route::get('/streaming-tours360/tour-360', function () {
    return view('pages.streaming-tours360.tour-360');
});

// Impreciones
Route::get('/impresiones/credenciales', function () {
    return view('pages.impresiones.credenciales');
});

Route::get('/impresiones/photobook', function () {
    return view('pages.impresiones.photobook');
});

Route::get('/impresiones/titulos_diplomas', function () {
    return view('pages.impresiones.titulos_diplomas');
});

// Catering Corporativo
Route::get('/catering-corporativo/cafetera_automatica', function () {
    return view('pages.catering-corporativo.cafetera_automatica');
});

Route::get('/catering-corporativo/catering', function () {
    return view('pages.catering-corporativo.catering');
});
