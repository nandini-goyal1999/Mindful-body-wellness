
<?php

session_start();
$con= mysqli_connect('localhost', "root","");
mysqli_select_db($con,"logininfo");
$username=$_POST['username'];
$password=$_POST['password'];

$s="select * from logintable where username= '$username'  && password='$password'";
$result=  mysqli_query($con, $s);
$num=  mysqli_num_rows($result);
if($num==1){
	$SESSION['username']=$username;
    header('location:home.php');
}else{
	 
    header('location:index.html');
    echo "Invalid Credentials";
}
?>