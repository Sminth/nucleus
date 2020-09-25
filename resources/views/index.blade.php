@extends('app')

@section('content')

<p class="d-none d-lg-block" style="font-family:'cursives';font-size:25px;font-weight:bold;position: absolute;left:35%;top:50px;color:grey;text-transform:uppercase">Moteur de Recheche <span id="type-text" style="color: #003399"></span><span style="color: #003399" class="blinking-cursor">_</span></p>
<p class="d-lg-none d-block" style="font-family:'cursives';font-size:15px;font-weight:bold;position: absolute;left:5%;top:50px;color:grey;text-transform:uppercase">Moteur de Recheche <span id="span" style="color: #003399"></span></p>

<div class="wrapper indexPage" >
    <div class="mainContainer">
        
        <div class="logoContainer">
            <img src="images/logo2.png" alt="nucLeus">
        </div>

        <div class="searchContainer">
            
            <form action="{{route('fichiers.recherche')}}" method="GET">
                <input class="searchBox" type="text" id="search" name="q" required placeholder="">
                <input class="push_button mt-5" style="font-weight:bold" type="submit" value="RECHERCHER">
            </form>

        </div>

    </div>

</div>
<script>
    function init () {

wait(1000).then(() => {
  clearText()
  typeText(', ').then(typeLoop)
})

function typeLoop() {
  typeText('Unique!')
    .then(() => wait(2000))
    .then(() => removeText('Unique!'))
    .then(() => typeText('Intelligent!'))
    .then(() => wait(2000))
    .then(() => removeText('Intelligent!'))
    .then(() => typeText('Pour Miagiste!'))
    .then(() => wait(2000))
    .then(() => removeText('Pour Miagiste!'))
    .then(() => typeText('By nucleus!'))
    .then(() => wait(2000))
    .then(() => removeText('By nucleus!'))
    .then(typeLoop)
    
}

}


// Source code 🚩

const elementNode = document.getElementById('type-text')
let text = ''

function updateNode () {
elementNode.innerText = text
}

function pushCharacter (character) {
text += character
updateNode()
}

function popCharacter () {
text = text.slice(0, text.length -1)
updateNode()
}

function clearText () {
text = ''
updateNode()
}


function wait (time) {
if (time === undefined) {
  const randomMsInterval = 100 * Math.random()
  time = randomMsInterval < 50 ? 10 : randomMsInterval
}

return new Promise(resolve => {
  setTimeout(() => {
    requestAnimationFrame(resolve)
  }, time)
})
}

function typeCharacter (character) {
return new Promise(resolve => {
  pushCharacter(character)
  wait().then(resolve)
})
}

function removeCharacter () {
return new Promise(resolve => {
  popCharacter()
  wait().then(resolve)
})
}

function typeText (text) {
return new Promise(resolve => {
  
  function type ([ character, ...text ]) {
    typeCharacter(character)
      .then(() => {
        if (text.length) type(text)
        else resolve()
      })
  }
  
  type(text)
})
}

function removeText ({ length:amount }) {
return new Promise(resolve => {
  
  function remove (count) {
    removeCharacter()
      .then(() => {
        if (count > 1) remove(count - 1)
        else resolve()
      })
  }
  
  remove(amount)
})
}


init()

</script>
<style>
    
    .push_button{
        position:relative;
        width:200px;
        color:#FFF;
        display:block;
        text-decoration:none;
        margin:0 auto;
        border-radius:5px;
        border:solid 1px #D94E3B;
        background:#cb3b27;
        text-align:center;
        padding:10px 20px;
        -webkit-transition: all 0.1s;
        -moz-transition: all 0.1s;
        transition: all 0.1s;
        -webkit-box-shadow: 0px 9px 0px #84261a;
        -moz-box-shadow: 0px 9px 0px #84261a;
        box-shadow: 0px 9px 0px #84261a;
}
.push_button:hover{
    -webkit-box-shadow: 0px 2px 0px #84261a;
    -moz-box-shadow: 0px 2px 0px #84261a;
    box-shadow: 0px 2px 0px #84261a;
    position:relative;
    top:7px;
    outline: none
}
.push_button:active{
    -webkit-box-shadow: 0px 2px 0px #84261a;
    -moz-box-shadow: 0px 2px 0px #84261a;
    box-shadow: 0px 2px 0px #84261a;
    position:relative;
    top:7px;
    outline: none
}
#span::before { 
        content: "Geeks"; 
        animation: animate infinite 5s; 
        padding-left: 10px; 
    } 
  
    @keyframes animate { 
  
        0% { 
            content: "Unique"; 
        } 

        25% { 
            content: "Optimiser"; 
        }
  
        50% { 
            content: "Intelligent"; 
        } 
  
        75% { 
            content: "Pour Miagiste"; 
        }
        100% { 
            content: "Recommander"; 
        } 
    } 
</style>
@endsection