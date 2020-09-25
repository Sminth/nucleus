@extends('app')
@section('content')
<div class="wrapper" style="background-color:white">

    <div class="header">
        <div class="d-lg-none d-block text-center mt-2" style="max-height: 40px">
            <a href="{{URL('/')}}">
                <img src="{{asset('images/logo2.png')}}" height="50" width="200">
            </a>
        </div>
        <div class="headerContent">
            
            <div class="d-none d-lg-block logoContainer">
                <a href="{{URL('/')}}">
                    <img src="{{asset('images/logo1.png')}}">
                </a>
            </div>
            

            <div class="searchContainer">
                
                <form action="{{URL('recherche')}}" method="GET">
                    
                    <div class="searchBarContainer">
                        @csrf
                        <input type="hidden" value="{{$type}}" name="type">
                        <input class="searchBox" type="text" name="q" value="@php echo isset($q)? $q : '' @endphp">
                        <button class="searchButton">
                            <img src="{{asset('images/search.png')}}">
                        </button>
                    </div>

                </form>

            </div>

        </div>

        <div class="tabsContainer ml-9">
                
            <ul class="tabList">
                <li class="web <?php echo $type == 'all' ? 'active' : '' ?>">
                    <a style="color: black" href='<?php echo "recherche?q=$q&type=all"; ?>'>TOUT</a>
                </li>
                <li class="<?php echo $type == 'document' ? 'active' : '' ?> ">
                    <a style="color: black" href='<?php echo "recherche?q=$q&type=document"; ?>'>DOCUMENTS</a>
                </li>
                <li class="<?php echo $type == 'image' ? 'active' : '' ?>">
                    <a style="color: black" href='<?php echo "recherche?q=$q&type=image"; ?>'>IMAGES</a>
                </li>
                <li class="<?php echo $type == 'video' ? 'active' : '' ?>">
                    <a style="color: black" href='<?php echo "recherche?q=$q&type=video"; ?>'>VIDEOS</a>
                </li>
            </ul>

        </div>

    </div>
    <style>

        svg{
        
            max-width: 20px;
        }
    </style>
    @if ($type=="all")
    <div class="mainResultsSection">
       
        
        <p></p>
        <?php 
        $numResults=count($resultat);
        echo "<p class='resultsCount'>$numResults résultat(s) trouvés</p>";
        ?>
        <div class='siteResults'>
            @foreach ($resultat as $res)
            <div class='resultsContainer'>
                
                <div>
            <h3 class='title'>
                <a class='result' href="{{url('page.unamed/document?id='.$res->id)}}">
                    {{$res->title}}
                </a>
            </h3>
            <form id="page-form1" action="{{route('page',[$res->type,$res->title])}}">
                <input type="hidden" name="id" value="{{$res->id}}">
            </form>
            </div>
            <span class='url'>{{$res->keywords}}</span>
            <span class='description'>{{$res->description}}</span>
        </div>
        @endforeach
        <div class="mt-5 mb-5 text-center text-lg-left ">
            {{ $resultat->links() }}
        </div>
    </div>
    
    @else
        
    <div class="mainResultsSection">
        <p></p>
        <?php 
        $numResults=count($resultat);
        echo "<p class='resultsCount'>$numResults résultat(s) trouvés</p>";
        ?>
        @if ($type!='image')
        <div class='siteResults'>
        @foreach ($resultat as $res)
        @if ($type!='video')
        <div class='resultsContainer'>
                
            <div>
        <h3 class='title'>
            <a class='result' href="{{url('page.unamed/document?id='.$res->id)}}">
                {{$res->title}}
            </a>
        </h3>
        <form id="page-form1" action="{{route('page',[$res->type,$res->title])}}">
            <input type="hidden" name="id" value="{{$res->id}}">
        </form>
        </div>
        <span class='url'>{{$res->keywords}}</span>
        <span class='description'>{{$res->description}}</span>
        
    </div>
        @else
        
        <div class="row">
            <div class="d-none d-lg-block col-lg-1" style="width: 50px">
                <img class="imgBox image" style="background-image: url(images/play.png);background-size:contain;background-repeat:no-repeat" src="{{asset('images/play.png')}}" alt="" width="70" height="70"><br>
            </div>
            <div class='resultsContainer col-lg-11'>
                
                    <div>
                <h3 class='title'>
                    <a class='result' href="{{url('page.unamed/video?id='.$res->id)}}" >
                        {{$res->title}}
                    </a>
                </h3>
                
                </div>
                <span class='url'>{{$res->keywords}}</span>
                <span class='description'>{{$res->description}}</span>
            </div>
            
            </div>
            @endif
            @endforeach
            @else
            <div class="container">
            <div class="row">
            @foreach ($resultat as $res)
                @php $img=$res->lien @endphp
               <div class="cont ml-4 mb-5 d-none d-lg-block" style="width: 22%;height:200px">
                   <a href="{{url('page.unamed/image?id='.$res->id)}}"> <img class="imgBox image" style="background-image: url({{asset('images/secour.jpg')}});background-size:cover;height:100%;width:100%" src="{{asset('fichiers/'.$img)}}" alt=""></a><br>
                    <p class="text-center url text-truncate" style="max-width: 80%">{{$res->title}}</p>
                    
                </div>
                <div class="cont ml-3 mb-4 d-block d-lg-none" style="width: 28%;height:100px">
                    <a href="{{url('page.unamed/image?id='.$res->id)}}"> <img class="imgBox image" style="background-image: url({{asset('images/secour.jpg')}});background-size:cover;height:100%;width:100%" src="{{asset('fichiers/'.$img)}}" alt=""></a><br>
                     <p class="text-center url text-truncate" style="max-width: 80%">{{$res->title}}</p>
                     
                 </div>
            
               @endforeach
            </div>
            </div>
            @endif
            <div class="mt-5 mb-5 text-center text-lg-left ">
                {{ $resultat->links() }}
            </div>
        </div>
        
    </div>
    @endif
   
    </div>
<style>
    .cont:hover .image {
  opacity: 0.3;
}

.cont:hover .middle {
  opacity: 1;
}

    .image {
  opacity: 1;
  transition: .5s ease;
  backface-visibility: hidden;
}

.middle {
  /*transition: .5s ease;
  opacity: 0;
  position: relative;
  top: 45%;
  left: 45%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  text-align: center;*/
}
       .imgBox:hover
    {
      -moz-box-shadow: 0 0 10px #ccc;
      -webkit-box-shadow: 0 0 10px #ccc;
      box-shadow: 0 0 10px #ccc;
    }
</style>

@endsection