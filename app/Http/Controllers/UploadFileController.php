<?php

namespace App\Http\Controllers;

use App\Models\fichiers;
use App\Models\User;
use Illuminate\Http\Request;

class UploadFileController extends Controller
{
    public function index() {
        return view('upload');
     }
     public function showUploadFile(Request $req) {
      //  dd($req);
        $req->validate([
            'file' => 'required|mimes:csv,txt,xls,pdf,doc,docx,png,jpg,jpeg,mp4|max:15000'
            ]);
            $ext_image=array('png','jpg','jpeg');
            $ext_doc=array('docx','doc','csv','txt','xls','pdf');
            $ext_video=array('mp4');
            
            if($req->file()) {
                $fileName = $req->file->getClientOriginalName();
                $extension=$req->file->getClientOriginalExtension();
                
                if (in_array($extension, $ext_image)) {
                    $filePath = $req->file('file')->move('fichiers/images', $fileName);
                    $type="image";$lien="images/$fileName";
                }
                elseif(in_array($extension, $ext_doc)){
                    $filePath = $req->file('file')->move('fichiers/documents', $fileName);
                    $type="document";$lien="documents/$fileName";
                }
                elseif(in_array($extension, $ext_video)){
                    $filePath = $req->file('file')->move('fichiers/videos', $fileName);
                    $type="video";$lien="videos/$fileName";
                }
                else{
                    $filePath = $req->file('file')->move('fichiers/documents', $fileName);
                    $type="document";$lien="documents/$fileName";
                }
                
                User::create(["name"=>$req->name,"titre_fichier_ajouter"=>$req->title]);
                fichiers::insert(["title"=>$req->title,"description"=>$req->description,"keywords"=>$req->keywords,"lien"=>$lien,"type"=>$type]);
                //dd($req->title,$req->description,$req->keywords,$lien,$type);
                
                /*  
                $fileModel->name = time().'_'.$req->file->getClientOriginalName();
                $fileModel->file_path = '/storage/' . $filePath;
                $fileModel->save();
    */  
    
                return redirect()->back()->with('success','Votre fichier a bien été enregistré.')->with('file', $fileName);
            }
            else{
                dd($req->file->getClientOriginalName());
            }
        }
  }