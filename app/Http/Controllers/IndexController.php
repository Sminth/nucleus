<?php

namespace App\Http\Controllers;

use App\Models\fichiers;
use Illuminate\Http\Request;

class IndexController extends Controller
// where(X) and (where(y) or wb or wv)
{
    public function search(){
        $q=request()['q'];
        $type = isset(request()["type"]) ? request()["type"] : "all";
        if ($type=="all") {
            $resultat=fichiers::where(function ($query) use($q) {
                $query->where('title','LIKE','%'.$q.'%')
                    ->orwhere('description','LIKE','%'.$q.'%')
                    ->orwhere('keywords','LIKE','%'.$q.'%')
                    ->orwhere('lien','LIKE','%'.$q.'%');
            })->paginate(8);
        }
       else{
        $resultat=fichiers::where(function ($query) use($type) {
            $query->where('type',$type);
        })->where(function ($query) use($q) {
            $query->where('title','LIKE','%'.$q.'%')
                ->orwhere('description','LIKE','%'.$q.'%')
                ->orwhere('keywords','LIKE','%'.$q.'%')
                ->orwhere('lien','LIKE','%'.$q.'%');
        })->paginate(8);
       }
        
        return view('search',compact('resultat','type','q'));
    }

    public function page($type){
        $id=request()['id'];
        $fichier=fichiers::where('id',$id)->first();
        return view('page',compact('fichier','type'));
    }
}
