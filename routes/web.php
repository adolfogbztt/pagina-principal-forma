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

Route::get('/video-corporativo/spotpublicitario', function () {
    return view('pages.video-corporativo.spot_publicitario');
});

// Streaming & Tours 360
Route::get('/streaming-tours360/streaming', function () {
    return view('pages.streaming-tours360.streaming');
});

Route::get('/streaming-tours360/tour360', function () {
    return view('pages.streaming-tours360.tour-360');
});

// Impreciones
Route::get('/impresiones/credenciales', function () {
    return view('pages.impresiones.credenciales');
});

Route::get('/impresiones/photobook', function () {
    return view('pages.impresiones.photobook');
});

Route::get('/impresiones/titulosdiplomas', function () {
    return view('pages.impresiones.titulos_diplomas');
});

// Catering Corporativo
Route::get('/catering-corporativo/cafetera', function () {
    return view('pages.catering-corporativo.cafetera_automatica');
});

Route::get('/catering-corporativo/catering', function () {
    return view('pages.catering-corporativo.catering');
});

// Colegios /Blogs colegios


// Promociones
Route::get('/colegios/promocion', function () {
    return view('pages.colegios.promocion');
});

// Comuniones
Route::get('/colegios/comunion', function () {
    return view('pages.colegios.comunion');
});

// Confirmación
Route::get('/colegios/confirmacion', function () {
    return view('pages.colegios.confirmacion');
});

// Kinder
Route::get('/colegios/kinder', function () {
    return view('pages.colegios.kinder');
});

// Photobook 20X20
Route::get('/colegios/p20', function () {
    return view('pages.colegios.photobook20');
});

// Photobook 25X25
Route::get('/colegios/p25', function () {
    return view('pages.colegios.photobook25');
});

// Photobook 30X30
Route::get('/colegios/p30', function () {
    return view('pages.colegios.photobook30');
});

// Photobook A4
Route::get('/colegios/pa4', function () {
    return view('pages.colegios.photobookA4');
});

