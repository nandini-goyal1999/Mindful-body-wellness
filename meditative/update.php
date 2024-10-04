<?php
session_start();
$con= mysqli_connect("localhost", "root","");
mysqli_select_db($con,"logininfo");

$email=$_SESSION['email'];
$s="select * from logintable where email= '$email'";
$res=  mysqli_query($con, $s) ;
if ($res) {
  # code...
  
  $userRow=mysqli_fetch_assoc($res);
}
else{
  echo "fail";
}
$res=mysqli_query($con,"UPDATE logintable SET  dob='$_POST[dob]', gender='$_POST[gender]', address='$_POST[address]', phone='$_POST[phone]' WHERE email='$email'");

 header('location:profile.php');
?>