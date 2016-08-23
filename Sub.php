<!DOCTYPE html>
<html>
<style>
html,
body{
    background: url(images/background.jpg) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  height: 100%;
  background-color: #fff;
  color: #fff;
  text-align: center;
  <!--text-shadow: 0 1px 3px rgba(0,0,0,.5);-->
 

}

</style>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">

<?php @mysqli_query("Set NAMES utf8");
	  @mysqli_query("Set CHARACTER SET utf8");
?>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="icon" href="images/logo.png">

  </head>
</head>

<body>


<div class ="container" style="margin-top: 40px" id = "con">




<div class="panel panel-default" >
<div class="panel-heading" >
<div class="table-responsive" >


<?php require 'php/tSub.php'  ?>
</div>
</div>
</div>
<div class="col-sm-6">
<div><a class= 'btn btn-success btn-sm  pull-left' type='button' href ='index.php' id='backbtn'>رجوع</a></div>
</div>
<!--
<div class="col-sm-6">
<div><button class= 'btn btn-success btn-sm  pull-left' type='button' onclick = print() id='backbtn'>طباعه</button></div>
</div>-->
</div>


 


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="js/d3.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/search.js"></script>


<div class="container">
	<ul class ="pagination">
		<li href="">
	
	</ul>
</div>


</body>

</html>