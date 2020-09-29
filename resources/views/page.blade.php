@extends('app')

@section('content')

<div class="container" style="margin-top: 5%">
    <div class="row">
        @php $img=$fichier->lien @endphp
        <div class="#1 col-lg-4 col-12" style="height:300px">
            @if ($fichier->type=="document")
                <img src="{{asset('images/doc.png')}}" alt="" style="width: 80%;height:90%">
            @else
                @if ($fichier->type=="image")
                    <img src="{{asset('fichiers/'.$img)}}" alt="" style="width: 100%;height:100%;background-image: url({{asset('images/secour.jpg')}});background-size:contain">
                    
                @else
                <div class="embed-responsive embed-responsive-21by9" style="width: 100%;height:100%;background-image: url({{asset('images/secour.jpg')}});background-size:contain">
                    <iframe class="embed-responsive-item" src="{{asset('fichiers/'.$fichier->lien)}}" ></iframe>
                </div>  
                @endif
            @endif
            
        </div>
        <div class="#2 col-lg-7 col-12" style="background: white;height:400px;padding:50px">
            <h3 class="" >{{$fichier->title}}</h3>
            <div class="mt-4 ml-4">
                <p>{{$fichier->description}}</p>
            </div>
            <div style="position: absolute;top:60%">

                <span>→ type de fichier : {{$fichier->type}}</span><br>
                <span>→ tag : {{$fichier->keywords}}</span>
            </div>
            <div style="position: absolute;top:80%">
                @if($fichier->type=="image" || $fichier->type=="video" )
                    <a href="{{asset('fichiers/'.$fichier->lien)}}" class="btn btn-outline-dark" download>TELECHARGER</a>
                @else
                <a href="{{asset('fichiers/'.$fichier->lien)}}" class="btn btn-outline-dark" >TELECHARGER</a>

                @endif
            </div>
        </div>
    </div>

</div>

@endsection