<?php

namespace App\Http\Controllers;
use App\Models\Etudiant;
use App\Models\Classe;
use Illuminate\Http\Request;

class EtudiantController extends Controller
{

    public function index(){
        $etudiants = Etudiant::orderBy("nom", "asc")->paginate(5);
        return view("etudiant", compact("etudiants"));

    }

    public function create(){
        $classes = Classe::all();
        return view("createEtudiant", compact("classes"));
    }


    public function edit(Etudiant $etudiant){
         $classes = Classe::all();
        return view("editEtudiant", compact("etudiant", "classes"));

    }


    public function store(Request $request){
        $request->validate([
            "nom"=>"required",
            "prenom"=>"required",
            "date"=>"required",
            "classe_id"=>"required"
        ]);

        Etudiant::create([
            "nom"=>$request->nom,
            "prenom"=>$request->prenom,
            "date"=>$request->date,
            "classe_id"=>$request->classe_id
        ]);

        return back()->with("success", "Utilisateur ajouter avec succè!");
    }


    public function update(Request $request, Etudiant $etudiant){
        $request->validate([
            "nom"=>"required",
            "prenom"=>"required",
            "date"=>"required",
            "classe_id"=>"required"
        ]);

        $etudiant->update([
            "nom"=>$request->nom,
            "prenom"=>$request->prenom,
            "date"=>$request->date,
            "classe_id"=>$request->classe_id
        ]);

        return back()->with("success", "Utilisateur mise à jour avec succè!");
    }

    public function delete(Etudiant $etudiant){
        $nom_complet = $etudiant->nom." ".$etudiant->prenom;
        $etudiant->delete();


        return back()->with("successDelete", "L'utilisateur '$nom_complet' supprimer avec succè!");

    }
}
