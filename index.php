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
   <!--text-shadow: 0 1px 3px rgba(0,0,0,.8);-->
 

}

</style>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">

<?php @mysqli_query("Set NAMES utf8");
	  @mysqli_query("Set CHARACTER SET utf8");
?>

<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="icon" href="images/logo.png">

<body>
<title>إدارة تقنية المعلومات</title>
<nav class="navbar navbar navbar-fixed-top" role="navigation" style="background-color:#787967;">
  <div class="container">
 	   <div class="navbar-header  pull-right">

 	   <!-- this button for responsive mnue list -->
 	          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
           	 </button>

	      <a class="navbar-brand" style="color:white; font-weight:bold;  font-size: 180%;" href="#"><center>إدارة تقنية المعلومات</center></a>
	      <!-- <img src="logo.jpg" alt="Smiley face" height="55" width="42"> -->
    </div>

    <div id = "navbar" class="navbar-collapse collapse">
    <ul class="nav navbar-nav  " >
      <li><a href="#" data-toggle="modal" data-target="#support">الدعم الفني</a></li>
      <li><a href="#changelog">التحديثات</a></li>
      <li><a href="#Tasks">المهام</a></li> 
      <li class="active"><a href="#Home">الرئيسية</a></li> 
    </ul>

  </div>
  </div>
</nav>



<!-- Home Section -->
<div id="Home" name="home" class="container" style='margin-top:100px'>
<div>
<h3>الرئيسية</h3>
 
  <hr>
</div>
<!-- ==================== -->
<div class="container-fluid" style="margin-top:80px">
<div class="row">
<div class="col-md-12">

<div id="ITmemeber" name = "ITmemeber" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
	<?php require 'php/slider.php'  ?>	
</div>
</div>
</div>
</div>
</div>
</div>



<!-- Tasks Section -->
<div id="Tasks" name="Tasks" class="container" >
<div>
<h3>جدول مهام الادارة</h3>
  <hr>
</div>
<div class="container">
<div class="row">
 <div class="col-md-12">
   <div class="panel panel-default">

   <div class="panel-heading" >
   
    <h2 class="panel-title"><span class="fa fa-arrow-circle-down pull-left"  data-toggle="collapse" data-target="#maintable" > </span>جدول المهام</h2>
	
	<div class="table-responsive collapse"  id="maintable" style ="margin-top:20px">
<?php require 'php/tMain.php'  ?>
	</div>
   </div>

  </div>
  </div>
  </div>
 </div>
</div>



<div class="container" id="changelog">
<div>
<h3>التحديثات</h3>
 
  <hr>
<div class="container">
<div class="row">
 

 <?php require 'php/updatelog.php'  ?>


  </div>
  </div>
  </div>
  







  <!--Support -->

  
  <!-- Modal -->
<div class="modal fadein" id="support" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    <!-- Header -->
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
         <center><img src="images/logo.png" style="width:350px;"></center>
        <center><h2 class="modal-title" id="myModalLabel">الدعم الفني</h2></center>
      
      </div>

      <!-- body -->
      <div class="modal-body">
     
<div class="form-group">




<form action="insert.php" method="post">
<div class="row">
<div class="col-sm-12">


<div class="col-sm-6"><select style = " width:200px;  margin-bottom:10px;"  class="form-control input-sm pull-left" type="text" name="txttype" id="txttype" required>
				<option></option>
	    <option>الاجهزه الألكترونية</option>
        <option>البرمجيات</option>

</select>:النوع</div>

<div class="col-sm-6"><select style = " width:200px;margin-bottom:10px;" class="form-control input-sm pull-left" type="text" name="txtdepart" id="txtdepart" required >
					<option></option>
		<option>إدارة الموارد البشرية</option>
        <option>إدارة العلاقات العامة</option>
        <option>إدارة المالية</option>
        <option>جرهم</option>
        <option>إدارة المشاريع</option>
        <option>الإتصالات الإدارية</option>
        <option>الإدارة التنفيذية</option>
		
</select>:جهة الطلب</div>


<div class="col-sm-6 pull-right"><select style = " width:200px;margin-bottom:10px;"  class="form-control input-sm pull-left" type="text" name="txtITS" id="txtITS" required>
			<option></option>
	    <option>محمود مليباري</option>
        <option>عبيدة زعرور</option>
        <option>مصطفى كروخي</option>
        <option>عبدالكريم طيب</option>
		

</select>:المختص</div>

<div  class="col-sm-12">
<p class="pull-right">:تفاصيل</p>
<textarea  class="form-control" rows="5" name="comment" id="comment" required></textarea></div>

</div>
</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">اغلاق</button>
        <button type="submit" value="insert"  class="btn btn-success pull-left">ارسال</button>
      </div>
</form>





</div>

      </div>
      <!-- footer -->

    </div>
  </div>
</div>

  
  
  

  
  
  
  
  
  
  
  
  
  
  
<nav class="navbar navbar" role="navigation" style="background-color:transparent;">
  <div class="container-fluid">
 	   <div class="navbar-header  pull-left">
	      <a class="navbar-brand" style="color:white; font-weight:bold;  font-size: 140%; margin-right: 60px" href="#"><i class="fa fa-copyright" aria-hidden="true"> I.T 2016 </i></a>
    </div>
</div>
</nav>

<script src = "js/jquery.min.js"></script>
<script src = "js/bootstrap.min.js"></script>
<script src="js/search.js"></script>
</body>
</html>

