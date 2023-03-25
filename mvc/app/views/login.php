<!DOCTYPE html>
<html lang="en">
<?php include "$_SERVER[DOCUMENT_ROOT]/webProject/Templates/head.php";?>
<title>Login</title>
 <body>
 <?php include "$_SERVER[DOCUMENT_ROOT]/webProject/Templates/menuBar.php";?>
   <div class="loginContainer">
    
   
   <form action="/webProject/mvc/public/User/isUser" method="POST">
        <div><span class="emailSpan">UserName</span></div>
        <br>
        <div><input class="emlLogin" type="text" placeholder="Enter username" name="userName" required></div>
        <br>
        <div><span class="passSpan">Password</span></div>
        <br>
        <div><input class="pssLogin" type="password" placeholder="Enter Password" name="pass" required></div>
        <div><input class="LoginSub" type="submit" name="loginButton" value="Login"></div>
    </form>
</div>
 </body>
</html>