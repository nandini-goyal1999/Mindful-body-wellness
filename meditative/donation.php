<?php
session_start();


header("refresh:2; url=contact.php");
$con= mysqli_connect("localhost", "root","")or die("error");
mysqli_select_db($con,"logininfo")or die("error");


	$user=$_POST['name'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$amount=$_POST['amount'];
$message=$_POST['message'];
$s="select * from charity ";
$result=  mysqli_query($con, $s);
$num=  mysqli_num_rows($result);
$_SESSION['name']=$num;

  
    $reg="INSERT into charity(name,email,phone,amount,message)values('$user','$email','$phone','$amount','$message')";
    if( mysqli_query($con, $reg))
    {

echo"ok";
	echo '<script type= text/javascript>
       alert("Thanks for your donation enquiry");
       </script>';
}
else{
	echo"no";
}




?>