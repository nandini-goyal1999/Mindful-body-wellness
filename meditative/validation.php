
<?php

session_start();
$con= mysqli_connect('localhost', "root","");
mysqli_select_db($con,"logininfo");
$username=$_POST['username'];
$password=$_POST['password'];
$email=$_POST['email'];
$s="select * from logintable where email= '$email'  && password='$password'";
$result=  mysqli_query($con, $s);
$num=  mysqli_num_rows($result);
if($num==1){
	$_SESSION['username']=$username;
	$_SESSION['email']=$email;
    header('location:home.php');
}else{
	 
    header('location:index.html');
    echo "Invalid Credentials";
}
?>