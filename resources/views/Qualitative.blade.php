<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="{{asset('js')}}/event.js"></script>
  <script src="{{asset('css')}}/style.css"></script>
  <style>
 html,body,
.wrapper{
  height: 100%;
  width: 100%;
  margin: 0;
  padding: 0;
  overflow: hidden;
}

.wrapper{
    display: grid;
  grid-template-rows: 520px;
  overflow:auto;
  margin-top:30px;
}

.content{
  display: grid;
  grid-template-columns: 250px 1fr;
  grid-gap: 10px;
  overflow-y:auto;
}

.fieldsContainer{
  display: grid;
  grid-template-columns: repeat(3, minmax(70px,1fr));
  grid-auto-rows: 50px;
  grid-gap: 10px;
  overflow-y:scroll;/*added*/
}

.section2{
    overflow-y:scroll;
}

.card1{
  padding: 10px;
  background: #ddd;
}
:target {
  border: 2px solid #D4D4D4;
  background-color: #e5eecc;
}

@media (max-width: 900px) {
    .fieldsContainer{
      display: grid;
      grid-template-columns: 1fr;
    grid-auto-rows: 50px;
  overflow-y:scroll;/*added*/

    }
    .content{
  display: grid;
  grid-template-columns:0.25fr 1fr;
  overflow-y:auto;
}
}

</style>
  
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark" >
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Qualitative Analysis <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/comprehension">Comprehension</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/creativity">Creativity test</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/analytical">Analytical Test</a>
      </li>
    </ul>
  </div>
</nav>
<form name="myForm" method="post" action = "qualitative" >

<div class="wrapper">
  <div class="content">
      <div class="fieldsContainer">
      @foreach($users as $user)
      <a href="#{{$user->qid}}"><div class="card1" id="card{{$user->qid}}"></div></a> 
      @endforeach
      </div>
    <div class="section2">
    @foreach ($users as $user)
    <div class="card">
   
  <div class="card-header" style="display:inline-block;" id="{{$user->qid}}">
  <p class="card-text" style="float:left;" ><b></b>&nbsp;&nbsp;
  @if($user->question)
            {{ $user->question }}
      @endif
      @if($user->questionimg)
      <img src="data:image/png;base64,{{chunk_split(base64_encode($user->questionimg))}}">
      @endif</p>
      <p style="float:right;">({{ $user->marks}})</p>
  </div>
  <div class="card-body">

    <p class="card-text" > 
    <input type="radio" name="{{$user->qid}}" class="{{$user->qid}}" value="1">   @if($user->option1img)
     <img src="data:image/png;base64,{{chunk_split(base64_encode($user->option1img))}}">
      @endif
      @if($user->option1)
      {{$user->option1}}
      @endif</input>
   </p>
      <p class="card-text"> 
      <input type="radio" name="{{$user->qid}}" value="2" class="{{$user->qid}}">
     @if($user->option2img)
     <img src="data:image/png;base64,{{chunk_split(base64_encode($user->option2img))}}">
      @endif
      @if($user->option2)
      {{$user->option2}}
      @endif</p>

      <p class="card-text">
      <input type="radio" name="{{$user->qid}}" value="3" class="{{$user->qid}}"> 
     @if($user->option3img)
     <img src="data:image/png;base64,{{chunk_split(base64_encode($user->option3img))}}">
      @endif
      @if($user->option3)
      {{$user->option3}}
      @endif</p>

      <p class="card-text"> 
      <input type="radio" name="{{$user->qid}}" value="4" class="{{$user->qid}}">
     @if($user->option4img)
     <img src="data:image/png;base64,{{chunk_split(base64_encode($user->option4img))}}">
      @endif
      @if($user->option4)
      {{$user->option4}}
      @endif</p>
   
  </div>
</div>
</form>

@endforeach
<br><br>


    </div>

    <button type="submit" value="submit">Submit</button>
  </div>
</div>
<script>

var y=1;
$(document).ready(function(){
var parent= $(".section2");
var parent1= $(".fieldsContainer");
var divs=parent.children();
var divs1=parent1.children();
while(divs.length){
  var x=Math.floor(Math.random()*divs.length);
  parent.append(divs.splice(x,1)[0]);
 
    
}
});

$('.card1').each(function(){
  $("#card"+y).html(y);
  y=y+1;


});

$(".card1").click(function() {
  var c=$(this).attr('class')
    $('html,body').animate({
        scrollTop: $("#{{$user->qid}}").offset().top-10000
    }, 2000);
});
$(".card-text > input[type=radio]").click(function(){
  var myClass=$(this).attr("class");
  $('input[type=radio]').each(function(){
    $('#card'+myClass).css('background-color', '#ABEBC6');
    });

  });
 
</script>
</body>
</html>