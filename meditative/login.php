<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>login and registration form</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="style.css">
        
    </head>
    <body>
     
        <div class ="hero">
            <div class="form-box">
                   
                   <br><br>
                <center>   <h2>MINDFUL BODY WELLNESS</h2></center>
                    <div class="button-box">
                    <div id="btn"></div>
                    <button type="button" class="toggle-btn" onclick="login()">Log in</button>
                    <button type="button" class="toggle-btn" onclick="register()">Register</button>
                </div>
            
                <form action="validation.php" method="post" id="login" class="input-group">
                     <input type="text" class="input-field" placeholder="Enter username" name="username" required>
                    <input type="text" class="input-field" placeholder="Enter email id" name="email" required>
                    <input type="password" class="input-field" placeholder="Enter Password" name="password" required>
                <input type="checkbox" class="check-box"><span>Remember Password</span>
                <button type="submit" class="submit-btn"> Login</button>
            </form>
                <form action="registration.php" method="post" id="register" class="input-group">
                    <input type="text" class="input-field" placeholder="User name" name="user" required>
                    <input type="email" class="input-field" placeholder="Email id" pattern="[a-zo-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" name="email" required>
                <input type="password" class="input-field" placeholder="Enter Password" name="password" required>
                <input type="checkbox" class="check-box"><span>I Agree To The Terms And Conditions</span>
                <button type="submit" class="submit-btn"> Register</button>
            </form>
             </div>       
        </div>
        <script>
                        var x=document.getElementById("login");
            var y=document.getElementById("register");
            var z=document.getElementById("btn");
            function register(){
    x.style.left="400px";
     y.style.left="50px";
     z.style.left="110px";
}
    function login(){
    x.style.left="50px";
     y.style.left="450px";
     z.style.left="0px";
 }
 </script>
            
    </body>
</html>
