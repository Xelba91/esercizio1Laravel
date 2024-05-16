<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/attivita', [PageController::class,"attivita"]) ->name("attivita");

Route::get("/attivita/add",[PageController::class,"creazione"]) -> name("creazione");

Route::get("/attivita/{id}",[PageController::class,"dettagli"])-> name("attivita.dettagli");

Route::get("/attivitaModifica",[PageController::class,"modifica"]) ->name("modifica");