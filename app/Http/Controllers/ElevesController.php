<?php

namespace App\Http\Controllers;

use App\Models\Eleves;
use Illuminate\Http\Request;

class ElevesController extends Controller
{
    public function newEleve(Request $request){


        $eleve = new Eleves;
        $eleve->nom = $request->nom;	
        $eleve->prenom = $request->prenom;	
        $eleve->dateNaissance = $request->dateNaissance;	
        $eleve->lieuNaissance = $request->lieuNaissance;	
        $eleve->genre = $request->genre;	
        $eleve->email = $request->email;	
        $eleve->contact = $request->contact;	
        $eleve->matricule = $request->matricule;	
        $eleve->code_eleve = $request->code_eleve;	
        $eleve->AnneeAcademique = $request->AnneeAcademique;		
        $eleve->classe_id = $request->classe_id;	
 
        $eleve->save();
     }
 
     public function listAll(){
 
         $eleve = Eleves::all();
         return[
             'eleves'=> $eleve
         ];
     }
 
     public function listOne($id){
 
         $eleve = Eleves::all($id);
         return[
             'eleve'=> $eleve
         ];
     }
 
     public function updateEleves(Request $request, $id){
         
 
        $eleve = Eleves::find($id);
        $eleve->nom = $request->nom;	
        $eleve->prenom = $request->prenom;	
        $eleve->dateNaissance = $request->dateNaissance;	
        $eleve->lieuNaissance = $request->lieuNaissance;	
        $eleve->genre = $request->genre;	
        $eleve->email = $request->email;	
        $eleve->contact = $request->contact;	
        $eleve->matricule = $request->matricule;	
        $eleve->code_eleve = $request->code_eleve;	
        $eleve->AnneeAcademique = $request->AnneeAcademique;	
        $eleve->classe_id = $request->classe_id;
 
        $eleve ->update();
     } 
 
     public function deleteEleves($id){
         $eleve = Eleves::find($id);
 
         $eleve->delete();
     }
}
