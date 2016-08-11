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
</head>

<body>


<div class ="container">
	
<h1 id="Headertxt" ><center>مشاريع تقنية المعلومات</center></h1>

</div>



<div class ="container" id = "con">




<div class="table-responsive" >


<?php require 'php/tMain.php'  ?>

</div>




<script src="js/d3.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/Main_chart.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>





</body>

</html>