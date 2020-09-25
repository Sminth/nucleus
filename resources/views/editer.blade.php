@extends('app')
@section('content')
    <style>
        .container {
            max-width: 500px;
        }
        dl, ol, ul {
            margin: 0;
            padding: 0;
            list-style: none;
        }
        .add{
            display: none;
        }


    </style>


    <div class="container mt-5">

        <form action="{{route('upload.file')}}" method="post" enctype="multipart/form-data">
          <h3 class="text-center mb-5">ENREGISTRER UN FICHIER</h3>
            @csrf
            @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <strong>{{ $message }}</strong>
            </div>
          @endif

          @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
          @endif
            <div style="background:white;padding:20px">
                @php
                       $user= App\Models\User::where('titre_fichier_ajouter',$fichier->title)->first()->name ?? 'admin';
                @endphp
                <div class="form-group">
                    <input value="{{$user}}" class="form-control" type="text" name="name" placeholder="Entrez votre nom complet | ex : sminth emmanuel" required >
                </div>
                <div class="form-group">
                    <input value="{{$fichier->title}}" class="form-control" type="text" name="title" placeholder="Entrez un titre | ex : cour java l3">
                </div>
                <div class="form-group">
                    <textarea class="form-control" name="description" id="" cols="30" rows="5"  required placeholder="Entrez une description | ex : cour de java licence 3 année scolaire 2024-2025, prof x">{{$fichier->description}}</textarea>
                   
                </div>
                <div class="form-group">
                    <input value="{{$fichier->keywords}}" class="form-control" type="text" name="keywords"  required placeholder="Entrez des mots clés | ex : l3, cour ja, ji 2k21, prof x">
                </div>
            <div class="custom-file">
                <input type="file" name="file" class="custom-file-input" id="chooseFile" required >
                <label class="custom-file-label" for="chooseFile">Selectionner votre fichier | </label>
            </div>

            <button type="submit" name="submit" class="btn btn-outline-dark btn-block mt-4">
                VALIDER
            </button>
            </div>
        </form>
    </div>
@endsection