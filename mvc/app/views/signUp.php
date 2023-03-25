<!DOCTYPE html>
<html lang="en">
<?php include "$_SERVER[DOCUMENT_ROOT]/webProject/Templates/head.php";?>
<title>Sign-Up</title>
<body>
<?php //session_start();
      if(isset($_SESSION['auth_user'])) : ?>
      <?php include "$_SERVER[DOCUMENT_ROOT]/webProject/Templates/menuBarLoggedIn.php";?>
     <?php else : ?>
      <?php include "$_SERVER[DOCUMENT_ROOT]/webProject/Templates/menuBar.php";?>
     <?php endif; ?>
<div class="registerContainer">
    <form action="/webProject/mvc/public/User/addUser" method="POST">
        <div><span>UserName</span></div>
        <br>
        <div><input class="userNameReg" type="text" placeholder="Enter userName" name="userName"></div>
        <br>
        <div><span>Password</span></div>
        <br>
        <div><input class="pssReg" type="password" placeholder="Enter Password" name="pass"></div>
        <br>
        <div><span>Confirm password</span></div>
        <br>
        <div><input class="cnfrmPass" type="password" placeholder="Confirm Password" name="confirmPass"></div>
        <br>
        <div><input class="signUp" type="submit" name="signUpButton" value="Sign-Up"></div>
    </form>
</div>
</body>
</html>