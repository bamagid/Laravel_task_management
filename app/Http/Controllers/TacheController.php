<?php

namespace App\Http\Controllers;

use App\Models\Tache;
use Illuminate\Http\Request;

class TacheController extends Controller
{
    public function getListeTaches(){
        $taches = Tache::orderBy('id', 'desc')->get();
    return view('taches.tache', ["taches"=>$taches]);
    }
    public function show(request $res){
        $tache_details=Tache::find($res->id);
        
         return view('taches.show',["tache"=>$tache_details]);
    }
    public function terminer(request $req){
        $tache=Tache::findOrFail($req->id);
        $tache->is_termine=1;
        $tache->save();
         return back();
    }
    public function supprimer(request $req){
        $tache=Tache::findOrFail($req->id);
        $tache->is_deleted=1;
        $tache->save();
         return back();
    }
    public function create(){
        return view('taches.nouveau');
      }
      public function save(Request $req){
        $tache = new Tache(); //on crée un object vide
      //on aliment notre objet crée

      $tache->nom_tache = $req->nom;
      $tache->description_tache = $req->description;
      $tache->date_echeance = $req->date;
      $tache->priorite = $req->priorite;


      //on  gére la priorité
      if ($req->termine) {
        $tache->is_termine = 1;
      }else{
        $tache->is_termine = 0;
      }

      //si l'ajout s'est bien effectué, alors on redirige vers la liste des taches

      if ($tache->save()) {
        return redirect('/tache');
      }
      }
}
