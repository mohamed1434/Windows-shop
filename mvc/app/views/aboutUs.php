<!DOCTYPE html>
<html lang="en">
<?php include "$_SERVER[DOCUMENT_ROOT]/webProject/Templates/head.php";?>
<title>AboutUs</title>
 <body>
 <?php //session_start();
      if(isset($_SESSION['auth_user'])) : ?>
      <?php include "$_SERVER[DOCUMENT_ROOT]/webProject/Templates/menuBarLoggedIn.php";?>
     <?php else : ?>
      <?php include "$_SERVER[DOCUMENT_ROOT]/webProject/Templates/menuBar.php";?>
     <?php endif; ?>
   <section class="about">
    <div class="main">
        <?php
        $aboutUs= $data['aboutUs'];
        $image = $data['image'];
                echo
                "
                <img src='../public/Images/" . $image . "'>
                <div class='about-text'>
                <h1>About Us</h1>
                <h5>Founder</h5>
                <p>'{$aboutUs}'</p>
                <a href='mailto:Mhamdoon5@gmail.com? subject=subject text'><button type='button'>Contact</button></a>
                </div>";
        ?>
    </div>
   </section>
 </body>
</html>