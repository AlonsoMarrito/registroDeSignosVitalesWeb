<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('components.index'); 
});

Route::get('/quienesSomos', function () {
    return view('components.hitSolutions.quienesSomos'); 
});

Route::get('/misionVision', function () {
    return view('components.hitSolutions.misionVision'); 
});

Route::get('/historia', function () {
    return view('components.hitSolutions.historia'); 
});

Route::get('/recursoMdmr', function () {
    return view('components.hitSolutions.historia'); 
});

Route::get('/recursoVitalBand', function () {
    return view('components.hitSolutions.historia'); 
});
