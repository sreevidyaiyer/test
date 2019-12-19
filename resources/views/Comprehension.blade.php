<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
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


:target {
  border: 2px solid #D4D4D4;
  background-color: #D5D8DC ;
}

.section2{
    overflow-y:scroll;
}

.card1{
  padding: 10px;
  background: #ddd;
}

.qs{
  background-color:#141414;
  color:#ffffff;
}
.qs:hover{
  background-color:#141414;
  color:#FCF3CF;
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
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
    <li class="nav-item ">
        <a class="nav-link" href="/qualitative">Qualitative Analysis <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active ">
        <a class="nav-link" href="#">Comprehension</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/creativity">Creativity test</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/analytical">Analytical Test</a>
      </li>
      </ul>
      <div class="navbar-collapse ">
        <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <button type="button" class="btn btn-success nav-link" id="timer">60:00</button>
            </li>
            &nbsp;&nbsp;
            <li class="nav-item">
            <button type="button" class="btn btn-success nav-link">Submit Test</button>
            </li>
           
        </ul>
      </div>  
  </div>
</nav>

<form name="myForm" method="post" formaction="comprehension">  
<div class="wrapper">
  <div class="content">
      <div class="fieldsContainer">
      @foreach($users3 as $user3)
      <a href="#{{$user3->qid}}"><div class="card1" id="card{{$user3->qid}}">{{$user3->qid}}</div></a>
      @endforeach
      </div>
    <div class="section2">
    @foreach ($users3 as $user3)
    <div class="card" id="{{$user3->qid}}"
    >
    @if($user3->para)
  <div class="card-header" style="display:inline-block;">
  <p class="card-text" style="float:left;"><b>{{ $user3->qid }}</b>&nbsp;&nbsp;
            {{ $user3->para }}<br><br>
  </div>
  @endif
  <div class="card-header" style="display:inline-block;" >
  <p class="card-text" style="float:left;"><b>{{ $user3->qid }}</b>&nbsp;&nbsp;
  @if($user3->question)
            {{ $user3->question }}
      @endif
      <p style="float:right;">({{ $user3->marks}})</p>
  </div>
  <div class="card-body">

    <p class="card-text" > 
    <input type="radio" name="{{$user3->qid}}" class="{{$user3->qid}}" value="1">   @if($user3->option1img)
     <img src="data:image/png;base64,{{chunk_split(base64_encode($user3->option1img))}}">
      @endif
      @if($user3->option1)
      {{$user3->option1}}
      @endif</input>
   </p>
      <p class="card-text"> 
      <input type="radio" name="{{$user3->qid}}" class="{{$user3->qid}}" value="2">
     @if($user3->option2img)
     <img src="data:image/png;base64,{{chunk_split(base64_encode($user3->option2img))}}">
      @endif
      @if($user3->option2)
      {{$user3->option2}}
      @endif</p>

      <p class="card-text">
      <input type="radio"  name="{{$user3->qid}}" class="{{$user3->qid}}" value="3"> 
     @if($user3->option3img)
     <img src="data:image/png;base64,{{chunk_split(base64_encode($user3->option3img))}}">
      @endif
      @if($user3->option3)
      {{$user3->option3}}
      @endif</p>

      <p class="card-text"> 
      <input type="radio" name="{{$user3->qid}}" class="{{$user3->qid}}" value="4">
     @if($user3->option4img)
     <img src="data:image/png;base64,{{chunk_split(base64_encode($user3->option4img))}}">
      @endif
      @if($user3->option4)
      {{$user3->option4}}
      @endif</p>
     
  </div>
</div>
@endforeach

    </div>

    <button type="button" class="btn qs" data-toggle="modal" data-target="#myModal">Submit Section</button>
    <p id="time">Hello</p></div>

</div>
<!-- Modal -->
<div id="myModal" class="modal" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <p>Are you sure you want to submit Comprehension Section ?</p>
        <small style="color:red;">*Note: No changes would be permitted after submission</small>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn qs" data-dismiss="modal">Close</button>
        <button type="submit"  class="btn qs" value="submit">Submit</button>
      </div>
    </div>

  </div>
</div>
</form>
  </div>
</div>
<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<script>
    function incTimer() {
      if(localStorage.getItem("time1")!==null){
        $("#time").append(" "+localStorage.getItem("time1"));
      }
        var currentMinutes = Math.floor(totalSecs / 60);
        var currentSeconds = totalSecs % 60;
        if(currentSeconds <= 9) currentSeconds = "0" + currentSeconds;
        if(currentMinutes <= 9) currentMinutes = "0" + currentMinutes;
        totalSecs--;
        localStorage.setItem("time",totalSecs);
        $("#timer").text(currentMinutes + ":" + currentSeconds);
        setTimeout('incTimer()', 1000);
    }

    if(localStorage.getItem("time"))
    {totalSecs = localStorage.getItem("time");}
    else
    totalSecs=3600;
    $(document).ready(function() {
        incTimer();
    });
</script>
<script>
$(".card1").click(function() {
    $('html,body').animate({
        scrollTop: $("#{{$user3->qid}}").offset().top-10000
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