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
</head>
<body>

<br>

<?php $x = array();
$marks=array();
$i=1; ?>
@foreach($qans as $qan)
                 <?php $x[$i] = $qan->correct;
                 $marks[$i]=$qan->marks;
                 $i=$i+1;
                 ?>                  
@endforeach
<?php
//echo implode(" ",$x);
echo "<br>";
?>

<?php $y = array();
$j=1; ?>
@foreach($qans1 as $qan1)
<?php 
for($j=1;$j<=20;$j=$j+1)
{$a="SEC1_ans".$j;
//echo $a;
$y[$j]=$qan1->$a;
echo ($y[$j]);
}?> 
@endforeach
<?php
echo implode(" ",$y);
?>


<?php
$count = 0;
for($k=1;$k<$i;$k=$k+1)
{
if ($x[$k] == $y[$k]) {
$count=$count+1;
}
}
?>

<?php $x1 = array();
$marks=array();
$i1=1; ?>
@foreach($cans as $can)
                 <?php $x1[$i1] = $can->correct;
                 $marks[$i1]=$can->marks;
                 $i1=$i1+1;
                 ?>                  
@endforeach
<?php
//echo implode(" ",$marks);
?>

<?php $y1 = array();
$j1=1; ?>
@foreach($cans1 as $can1)
<?php 
for($j1=1;$j1<=20;$j1=$j1+1)
{$a="COMP_ANS".$j1;
//echo $a;
$y1[$j1]=$can1->$a;
}?> 
@endforeach
<?php
//echo implode("<br> ",$y);
?>


<?php
$count1 = 0;
for($k1=1;$k1<$i1;$k1=$k1+1)
{
if ($x1[$k1] == $y1[$k1]) {
$count1=$count1+$marks[$k1];
}
//echo $count1;
}
?>

<?php $x2 = array();
$marks2=array();
$i2=1; ?>
@foreach($crans as $cran)
                 <?php $x2[$i2] = $cran->correct;
                 $marks2[$i2]=$cran->marks;
                 $i2=$i2+1;
                 ?>                  
@endforeach
<?php
//echo implode(" ",$marks);
?>

<?php $y2 = array();
$j2=1; ?>
@foreach($crans1 as $cran1)
<?php 
for($j2=1;$j2<=20;$j2=$j2+1)
{$a="CRE_ANS".$j2;
//echo $a;
$y2[$j2]=$cran1->$a;
}?> 
@endforeach
<?php
//echo implode("<br> ",$y);
?>


<?php
$count2 = 0;
for($k2=1;$k2<$i2;$k2=$k2+1)
{
if ($x2[$k2] == $y2[$k2]) {
$count2=$count2+$marks2[$k2];
}
//echo $count2;
}
?>

<?php $x3 = array();
$marks3=array();
$i3=1; ?>
@foreach($anans as $anan)
                 <?php $x3[$i3] = $anan->correct;
                 $marks3[$i3]=$anan->marks;
                 $i3=$i3+1;
                 ?>                  
@endforeach
<?php
//echo implode(" ",$marks);
?>

<?php $y23 = array();
$j3=1; ?>
@foreach($anans1 as $anan1)
<?php 
for($j3=1;$j3<=20;$j3=$j3+1)
{$a="ANA_ANS".$j3;
//echo $a;
$y3[$j3]=$anan1->$a;
}?> 
@endforeach
<?php
//echo implode("<br> ",$y);
?>


<?php
$count3 = 0;
for($k3=1;$k3<$i3;$k3=$k3+1)
{
if ($x3[$k3] == $y3[$k3]) {
$count3=$count3+$marks3[$k3];
}
//echo $count2;
}
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
      <td><?php echo $count1;?></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Creativity Test</td>
      <td><?php echo $count2;?></td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td>Analytical test</td>
      <td><?php echo $count3;?></td>
    </tr>
  </tbody>
</table>
  <div class="card-footer text-muted">
   <p style="float:right;"> Total Score : <?php echo $count+$count1+$count2+$count3;?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
  </div>
</div>

<script>
window.onload=function(){
  localStorage.clear();
}
</script>
</body>
</html>