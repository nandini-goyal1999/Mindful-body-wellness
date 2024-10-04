<?php
session_start();
?>
<html>
<head>
<title> gg </title>
</head>
<body>
<h1> welcome <?php  isset($SESSION['username']); 
echo isset($SESSION['username']); ?></h1>
</body>
</html>