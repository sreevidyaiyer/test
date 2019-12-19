<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>TEST MODULE</title>
<link rel="icon" href="vesitlogo.png" type="image/x-icon">
	<style>
	body{
		margin: 0;
		padding: 0;
	}
	body:before{
		content: '';
		position: fixed;
		width: 100vw;
		height: 100vh;
		background-image: url("images/build.png");
		background-position: center center;
		background-repeat: no-repeat;
		background-attachment: fixed;
		background-size: cover;
		-webkit-filter: blur(5px);
		-moz-filter: blur(5px);
		-o-filter: blur(5px);
		-ms-filter: blur(5px);
		filter: blur(5px);
	}
	.Registration-form
	{
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%,-50%);
	width: 1050px;
	height: 650px;
	padding: 80px 40px;
	box-sizing: border-box;
	background: white;
	opacity: 75%;
	border-radius:50px;
	}
	.Registration-form h3 {
	margin: 0;
	left:50%;
	color: black;
	font-family:"sans-serif";
	}
	.Registration-form h1{
	top:15%;
	left:20%;
	text-align:center;	
	color:black;
	font-family:"sans-serif";
	}
	.Registration-form input[type="submit"] {
	height: 30px;
	color: #fff;
	font-size: 15px;
	background: red;
	cursor: pointer;
	border-radius: 25px;
	border: none;
	outline: none;
	margin-top: 15%;
	}
	
	#btn {
		background-color: #8AB4F8;
		border: none;
		color: black;
		padding: 7px 140px;
		text-align: center;
		text-decoration: none;
		display: inline-block;
		font-size: 20px;
		margin: 54px 2px;
		cursor: pointer;
		border-radius: 7px;
		position : absolute;
		top: calc(+1000px/2);
		left: calc(50% - 170px);
		font-family:"sans-serif";
		
	}
			
	#btn:hover{
		background-color: transparent;
		color: white;
	}
	</style>
</head>
<body>

<div class="Registration-form">
<h1>WELCOME, USER!</h1>
   <h3>
	<p>	1.Participant should reach examination room at least 10 minutes before the scheduled time. 
		No additional time shall be &nbsp;&nbsp;&nbsp;given to Participant arriving late.
		Participant who has short attendance in any of the course(s) shall not be allowed to &nbsp;&nbsp;&nbsp;sit 
		in the examination room.
		DON'T BRING YOUR MOBILE PHONE AND ANY OTHER UNAUTHORIZED &nbsp;&nbsp;&nbsp;ELECTRONIC GADGETS!
	</p>
	<p>
		2.If you bring it to an exam, you should be aware of the following:
		<br>&nbsp;&nbsp;&nbsp;i. The University of Management and Technology accepts no responsibility for any loss or 
		damage to your belongings.
		<br>&nbsp;&nbsp;&nbsp;ii. On finding any of the unauthorized electronic gadgets, can lead the participant to 
		Unfair Means Case.
	</p>
	<p>
		3.Participant must maintain complete silence in the examination room. If a participant has 
		any kind of query he/she &nbsp;&nbsp;&nbsp;should raise his/her hand and wait for the invigilator.
		Lending/borrowing of pen, pencil, ruler, calculator, etc. is strictly &nbsp;&nbsp;&nbsp;prohibited in the 
		examination room.
		Participant must display UMT ID Card.
	</p>
	<p>
		4.Participant must maintain complete silence in the examination room. If a participant has 
		any kind of query he/she &nbsp;&nbsp;&nbsp;should raise his/her hand and wait for the invigilator.
		Lending/borrowing of pen, pencil, ruler, calculator, etc. is strictly &nbsp;&nbsp;&nbsp;prohibited in the 
		examination room.
		Participant must display UMT ID Card.
	</p>
	</h3>
	<br>

<button formaction ="loginchoice.html"  id="btn"><b>Start Exam</b></button>
  
</p>


</form>
</div>
</body>
</html>