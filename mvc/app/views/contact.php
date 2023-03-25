<!DOCTYPE html>
<html lang="en">
<?php include "$_SERVER[DOCUMENT_ROOT]/webProject/Templates/head.php";?>
<title>Contact-Us</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
        $contactUs = $data['contactUs'];
        $image = $data['image'];
                echo
                "
                <img src='../public/Images/" . $image . "'>
                <div class='about-text'>
                <h1>Contact Us</h1>
                <p>'{$contactUs}'</p>
                <a href='https://www.instagram.com/7amoud1434/' class='fa fa-instagram'></a>
                </div>";
        ?>
    </div>
     </section>
 </body>
</html>