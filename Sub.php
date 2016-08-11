<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">

<?php @mysqli_query("Set NAMES utf8");
	  @mysqli_query("Set CHARACTER SET utf8");
?>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css">
<link href='https://fonts.googleapis.com/css?family=Indie+Flower&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  </head>
</head>

<body>


<div class ="container" id = "con">





<div class="table-responsive" >


<?php require 'php/tSub.php'  ?>

</div>

<div class="col-sm-6">
<div><a class= 'btn btn-success btn-sm  pull-right' type='button' href ='Main.php' id='backbtn'>رجوع</a></div>
</div>
<div class="col-sm-6">
<div><button class= 'btn btn-success btn-sm  pull-left' type='button' onclick = print() id='backbtn'>طباعه</button></div>
</div>
</div>


 



<script src="js/d3.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/Main_chart.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


<div class="container">
	<ul class ="pagination">
		<li href="">
	
	</ul>
</div>


</body>

</html>