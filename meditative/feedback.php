

<?php
session_start();
header('location:about.php');
$con= mysqli_connect("localhost", "root","");
mysqli_select_db($con,"logininfo");
$view=$_POST['view'];
$comments=$_POST['comments'];
$name=$_POST['name'];
$email=$_POST['email'];
$s="select * from feedbacktable where email= '$email'";
$result=  mysqli_query($con, $s);
$num=  mysqli_num_rows($result);

    $reg="insert into feedbacktable(view,comments,name,email)values('$view','$comments','$name','$email')";
    mysqli_query($con, $reg);
    echo '<script>alert("Thank You..! Your Feedback is Valuable to Us"); location.replace(document.referrer);</script>';
    


