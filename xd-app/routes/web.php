<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EjemploController;

Route::view(uri:'/', view: 'welcome');
 
/*Route::get(uri:'/estudiantes', function (Request $request)  {
    dd($request->input(key:'saludos'));

});
*/

Route::get("/estudiantes/{id}", [EjemploController::class, "reconocer"]);