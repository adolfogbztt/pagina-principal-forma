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

// Blogs colegios


// Promociones
Route::get('/colegios/promociones', function () {
    return view('pages.colegios.promociones');
});

// Comuniones
Route::get('/colegios/comuniones', function () {
    return view('pages.colegios.comuniones');
});

// Confirmación
Route::get('/colegios/confirmacion', function () {
    return view('pages.colegios.confirmacion');
});

// Kinder
Route::get('/colegios/kinder', function () {
    return view('pages.colegios.kinder');
});

// Photobook tapa dura
Route::get('/colegios/tapadura', function () {
    return view('pages.colegios.photobook_tapa_dura');
});

// Photobook Tapa con cuero
Route::get('/colegios/tapacuero', function () {
    return view('pages.colegios.photobook_tapa_cuero');
});

// Photobook Tapa acolchada
Route::get('/colegios/acolchada', function () {
    return view('pages.colegios.photobook_tapa_acolchada');
});

// Bipack
Route::get('/colegios/bipack', function () {
    return view('pages.colegios.bipack');
});

// Tripack
Route::get('/colegios/tripack', function () {
    return view('pages.colegios.tripack');
});

// Album 2 en 1 (Photobook y album de estampas)
Route::get('/colegios/album', function () {
    return view('pages.colegios.album_2x1');
});

// Anuarios
Route::get('/colegios/anuarios', function () {
    return view('pages.colegios.anuarios');
});

// Anuarios tipo revista
Route::get('/colegios/revistas', function () {
    return view('pages.colegios.anuarios_revistas');
});

