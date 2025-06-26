<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controller\Route;

Route::get(uri:'/', action: function (): view {
    return view(view: 'welcome');

});

Route::get (name: '/medicinas/poco-stock', action [MedicineController::class,'poco_stock']);

Route::get(uri:'/medicina/(message)',action:[MedicineController::class,'index']);

Route::resource(name: '/medicina', Controller: MedicineController::class);
