@extends('app')
@section('title','admin')
@section('content')
<div class=" contents">
    <div class="container">
 
    <div>
        <br>
        
        <h1 class="text-center h1">TABLEAU DE BORD</h1>
    </div>
    <br>
    <div class="justify-content-center ">
        <div class="row">
        <div class="col-3">

             <div class="card " style="height: 130px;box-shadow: 0px 9px 0px #001133;border:solid 1px #003399;
            background:#003399;">
                <div class="card-body">
                    <a href=""><p class="h1 text-center text-white" style="font-weight:bold;font-size: 20px;"> NOMBRE DE FICHIER TOTAL </p></a>
                    <p class="text-center text-white" style="font-size: 25px;font-weight:bold;">{{$total_all}}</p>
                </div>
            </div>
            <div class="card mt-3" style="height: 130px;box-shadow: 0px 9px 0px #001133;border:solid 1px #003399;
            background:#003399;">
                <div class="card-body">
                    <a href=""><p class="h1 text-center text-white" style="font-weight:bold;font-size: 20px;"> DOCUMENT PDF ET AUTRES </p></a>
                    <p class="text-center text-white" style="font-size: 25px;font-weight:bold;">{{$total_doc}}</p>
                </div>
            </div>
            <div class="card mt-3" style="height: 130px;box-shadow: 0px 9px 0px #001133;border:solid 1px #003399;
            background:#003399;">
                <div class="card-body">
                    <a href=""><p class="h1 text-center text-white" style="font-weight:bold;font-size: 20px;"> FICHIER IMAGE </p></a>
                    <p class="text-center text-white" style="font-size: 25px;font-weight:bold;">{{$total_img}}</p>
                </div>
            </div>
            <div class="card mt-3" style="height: 130px;box-shadow: 0px 9px 0px #001133;border:solid 1px #003399;
            background:#003399;">
                <div class="card-body">
                    <a href=""><p class="h1 text-center text-white" style="font-weight:bold;font-size: 20px;"> FICHIER VIDEO </p></a>
                    <p class="text-center text-white" style="font-size: 25px;font-weight:bold;">{{$total_vid}}</p>
                </div>
            </div>
            
            </div>
            
          <div class="col-9 mt-4">
            <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Titre</th>
                    <th scope="col">tags</th>
                    <th scope="col">Type du fichier</th>
                    <th scope="col">Creer par</th>
                 
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($fichiers as $key=>$item)
                    @php
                       $user= App\Models\User::where('titre_fichier_ajouter',$item->title)->first()->name ?? 'admin';
                    @endphp
                  <tr>
                    <th scope="row">{{$key+1}}</th>
                    <td>{{$item->title}}</td>
                    <td>{{$item->keywords}}</td>
                    <td>{{$item->type}}</td>
                    <td>{{$user}}</td>
                    <td>
                        <!-- <a href="" target=_blank class="btn btn-outline-secondary"><i class="fa fa-eye"></i></a> -->
                        <a href="{{route('editer',[$item->id])}}" ><i class="fa fa-edit"></i></a>
                        <a href="{{route('sup',[$item->id])}}"  style="color: black"><i class="fa fa-trash"></i></a>                 
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
          </div>
        </div>
        </div>
        
    </div>
</div>

@endsection
