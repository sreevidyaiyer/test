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

.section2{
    overflow-y:scroll;
}

.card1{
  padding: 10px;
  background: #ddd;
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
  
<div class="wrapper">
  <div class="content">
      <div class="fieldsContainer">
      @foreach($users as $user)
        <div class="card1">{{$user->qid}}</div>
      @endforeach
      </div>
    <div class="section2">
    @foreach ($users as $user)
    <div class="card">
  <div class="card-header" style="display:inline-block;">
  <p class="card-text" style="float:left;"><b>{{ $user->qid }}</b>&nbsp;&nbsp;
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
    <input type="radio" name="options" value="option1">   @if($user->option1img)
     <img src="data:image/png;base64,{{chunk_split(base64_encode($user->option1img))}}">
      @endif
      @if($user->option1)
      {{$user->option1}}
      @endif</input>
   </p>
      <p class="card-text"> 
      <input type="radio" name="options" value="option2">
     @if($user->option2img)
     <img src="data:image/png;base64,{{chunk_split(base64_encode($user->option2img))}}">
      @endif
      @if($user->option2)
      {{$user->option2}}
      @endif</p>

      <p class="card-text">
      <input type="radio" name="options" value="option3"> 
     @if($user->option3img)
     <img src="data:image/png;base64,{{chunk_split(base64_encode($user->option3img))}}">
      @endif
      @if($user->option3)
      {{$user->option3}}
      @endif</p>

      <p class="card-text"> 
      <input type="radio" name="options" value="option4">
     @if($user->option4img)
     <img src="data:image/png;base64,{{chunk_split(base64_encode($user->option4img))}}">
      @endif
      @if($user->option4)
      {{$user->option4}}
      @endif</p>
     
  </div>
</div>
@endforeach

    </div>

  </div>
</div>
</body>
</html>