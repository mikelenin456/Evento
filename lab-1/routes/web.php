<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemControllers;


Route::get('/hello', function () {
    return 'Hola, Laravel';
});

Route::get('/articulo/{id}', function (int $id) {
    return "El id del articulo es $id";
});

Route::get('/saludo/{name?}', function ($name=null) {
    return $name? 'Hola, $name': 'Hola, Inivtado';
});

Route::get('/orden/{orderId?}', function ($orderId) {
    return  "El Id de la orden es $orderId";
})-> where('orderId', '[0-9]+');

