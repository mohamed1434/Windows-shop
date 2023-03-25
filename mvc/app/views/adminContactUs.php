<!DOCTYPE html>
<html lang="en">
<?php include "$_SERVER[DOCUMENT_ROOT]/webProject/Templates/head.php";?>
<title>Admin-ContactUs</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <body>
 <?php include "$_SERVER[DOCUMENT_ROOT]/webProject/Templates/adminMenuBar.php";?>
 <section class="about">
    <div class="main">
    <!-- <img src='../public/Images/" . $image . "'> -->
        <?php
        $contactUs= $data['contactUs'];
        $image = $data['image'];
                echo
                "
                <form action ='/webProject/mvc/public/ccontactUs/update_contactUs' method = 'POST'>
                <label>Image: <input type='file' id='iamge' name='image' accept='image/*'></label>
                <div class='about-text'>
                <h1>Contact Us</h1>
                <h5>Founder</h5>
                <label> Desc : <textarea rows='15' cols='80' name='contactUs'  required>{$contactUs}</textarea></label>
                <label> <input class ='saveButton' type= 'submit' name = 'save' value ='Save'/></label>
                </div>
                </form>";
        ?>
    </div>
   </section>
 </body>
</html>