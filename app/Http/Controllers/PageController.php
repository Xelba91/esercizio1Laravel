<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function attivita() {
        return view("attivita");
    }
    public function creazione(){
        return view("creazione");
    }
    public function dettagli($id){
        return "Dettagli attivita" . $id;
    }
    public function modifica(){
        return view("modifica");
    }
}
