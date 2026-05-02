<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculController extends Controller
{
     // Méthode somme
    public function somme($a,$b){
    $result = $a + $b;
    return view('tp-01.exercise02.affichage',compact('result'));
    
}

    // Méthode produit
    public function produit($a, $b)
    {
        $p = $a * $b;
        return "Le produit est : " . $p;
    }
}
