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
            if ($q==":all") {
                $resultat=fichiers::paginate(8);
            }
            else{
                $resultat=fichiers::where(function ($query) use($q) {
                    $query->where('title','LIKE','%'.$q.'%')
                        ->orwhere('description','LIKE','%'.$q.'%')
                        ->orwhere('keywords','LIKE','%'.$q.'%')
                        ->orwhere('lien','LIKE','%'.$q.'%');
                })->paginate(8);
            }
            
        }
       else{
        if ($q==":all") {
            $resultat=fichiers::where('type',$type)->paginate(8);
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
    }
        return view('search',compact('resultat','type','q'));
    }

    public function page($type){
        $id=request()['id'];
        $fichier=fichiers::where('id',$id)->first();
        return view('page',compact('fichier','type'));
    }

    public function admin(){
        $fichiers=fichiers::orderBy('created_at','desc')->get();
        $total_all=count(fichiers::all());
        $total_doc=count(fichiers::where("type","document")->get());
        $total_img=count(fichiers::where("type","image")->get());
        $total_vid=count(fichiers::where("type","video")->get());
        return view('admin',compact('fichiers','total_all','total_doc','total_img','total_vid'));
    }
    public function editer(fichiers $fichier){
        return view('editer',compact('fichier'));
    }
    public function suppression(fichiers $fichier){
        $fichier->delete();
        return redirect()->back();
    }
}
