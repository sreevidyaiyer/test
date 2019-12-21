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
 .card {
   margin-left:10%;
   margin-right:10%;
 }

 .card-header{
  background-color:#343a40;
  color:white;
  font-size:20px;
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
      <li class="nav-item ">
        <a class="nav-link" href="/comprehension">Comprehension</a>
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

<br>


<?php $x = array();
$i=0; ?>
@foreach($qans as $qan)
             @if ($qan->correct != 0)
                 <?php $x[$i] = $qan->correct;
                 $i=$i+1;
                 ?>                  
             @endif
@endforeach
<?php
// echo implode(" ",$x);
?>

<?php $y = array();
$j=1; ?>
@foreach($qans1 as $qan1)
<?php 
for($j=1;$j<=20;$j=$j+1)
{$a="SEC1_ans".$j;
//echo $a;
$y[$j]=$qan1->$a;
}?> 
@endforeach
<?php
//echo implode("<br> ",$y);
?>


<?php
$count = 0;
for($k=1;$k<=8;$k=$k+1)
{
if ($x[$k] == $y[$k]) {
$count=$count+1;
}
}
//echo $count;
?>
<br>
<div class="card text-center">
  <div class="card-header">
     <b>Result</b>
  </div>
  <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Section</th>
      <th scope="col">Marks</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Qualitative Analysis</td>
      <td><?php echo $count; ?></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Comprehension</td>
      <td>Thornton</td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td>Creativity Test</td>
      <td>the Bird</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Analytical test</td>
      <td></td>
    </tr>
  </tbody>
</table>
  <div class="card-footer text-muted">
   <p style="float:right;"> Total Score : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
  </div>
</div>

<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<script>
    function incTimer() {
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
</body>
</html>