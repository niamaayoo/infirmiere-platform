<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerTP1 extends Controller
{
     public function etudiant(){

        $data=[];
        $data['nom']='ELGARRAI';
        $data['prenom']='Zineb';
        $data['poste']='Formatrice';
        $data['Modules']=[
            'Gestion des Données',
            'Développer en Backend',
            'Projet de synthèse'
        ];

        return view('tp-01-1.affichage',$data);
    }
}
