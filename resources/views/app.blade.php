<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="moteur de recherche nucleus, fait specialement pour les étudiants de la filière professionnel MIAGE-GI pour stocker en un seul endroit tous les documents pdf, word, excel.. des differents niveau, aussi stocker des photos, videos de la ji, des professeurs, des etudiants etc ..."/>
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.min.css')}}" >
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

    <title>Nucleus</title>
    <style>
    .add {
        background-color : #31B0D5;
        
        padding: 1px 10px;
        border-color: #003399;
        border-radius: 5px 25px;
        background: transparent;
        font-size:30px;font-weight:bold;
        color: #003399;
        z-index: 1111;  
      }
.add:focus{
    outline: none;
}
      #mybutton {
        position: fixed;
        bottom: 10px;
        left: 15px;
        
      }
      #ap{
        position: fixed;
        bottom: -20px;
        right: 10px;
        z-index: 1111;
      }
      </style>
    @yield('extra-js')
</head>
<body style="background: url('image-de-secours.png');
background-image: url({{asset('images/hero.svg')}});
background-size: cover;background-color:white;
        ">
    @yield('content')
    <div id="mybutton">
        <a href="{{route('view.upload')}}" target="_blank"><button class="add">+</button></a>
    </div>
    <a href="{{url('/sminth')}}"> <p class="d-none d-lg-block" id="ap" style="font-weight:bold;"><i style="color: red;font-size:25px">♥</i><i style="color:#003399">  by nucleus</i></p></a>
    <a href="{{url('/sminth')}}"><p class="d-lg-none d-block" id="ap" style="font-weight:bold;"><i style="color: red;font-size:25px">♥</i><i style="color:#003399">  by nucleus</i></p></a>

</body>
</html>