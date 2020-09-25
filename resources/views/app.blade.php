<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.min.css')}}" >

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
    <p class="d-none d-lg-block" id="ap" style="font-weight:bold;"><i style="color: red;font-size:25px">♥</i><i style="color:#003399">  by nucleus</i></p>
    <p class="d-lg-none d-block" id="ap" style="font-weight:bold;"><i style="color: red;font-size:25px">♥</i><i style="color:#003399">  by nucleus</i></p>

</body>
</html>