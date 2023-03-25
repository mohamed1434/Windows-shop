<!DOCTYPE html>
<html lang="en">
<?php include "$_SERVER[DOCUMENT_ROOT]/webProject/Templates/head.php";?>
<title>WS.Shop</title>
 <body>
     <?php //session_start();
      if(isset($_SESSION['auth_user'])) : ?>
      <?php include "$_SERVER[DOCUMENT_ROOT]/webProject/Templates/menuBarLoggedIn.php";?>
     <?php else : ?>
      <?php include "$_SERVER[DOCUMENT_ROOT]/webProject/Templates/menuBar.php";?>
     <?php endif; ?>
   <div class="container">
   <div class="row">
    <div class="column">
        <h1>Explore our windows</h1>
    </div>
    <div class="column">
        <div class="card">
            <a href="/webProject/mvc/public/pproducts"><img class="image" src="../public/Images/window2.jpg"></a>
            <h2>Go shopping</h2>
        </div>
    </div>
   </div>
</div>
 </body>
</html>