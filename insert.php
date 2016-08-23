
<?php
echo'<html>
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

   <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">';
   
   
include('php/data.php');
date_default_timezone_set("Asia/Kuwait");
$date= date('y/d/m h:i:s');
$pcname = gethostbyaddr($_SERVER['REMOTE_ADDR']);
$status='مفتوحة';
// Avilable User entery
$txttype = mysqli_real_escape_string($connection, $_POST['txttype']);
$txtdepart = mysqli_real_escape_string($connection, $_POST['txtdepart']);
$txtITS = mysqli_real_escape_string($connection, $_POST['txtITS']);
$comment = mysqli_real_escape_string($connection, $_POST['comment']);

$sql = "INSERT INTO Support(Issue_Type,Depart,incharge,Comment,PCname,timedate,status) VALUES ('$txttype','$txtdepart','$txtITS','$comment','$pcname','$date','$status')";


if(mysqli_query($connection, $sql)){
   
   header('Refresh:1; url=index.php');
echo '<center><h1>تم ارسال النموذج بنجاح</h1></center>';
//header("Location: index.php");
 // exit;
	    
} else{
    
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($connection);
};

mysqli_close($connection);
?>


