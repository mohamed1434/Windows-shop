<!DOCTYPE html>
<html lang="en">
<?php include "$_SERVER[DOCUMENT_ROOT]/webProject/Templates/head.php";?>
<title>Admin-AboutUs</title>
<body>
<?php include "$_SERVER[DOCUMENT_ROOT]/webProject/Templates/adminMenuBar.php";?>
<section class="about">
    <div class="main">
    <!-- <img src='../public/Images/" . $image . "'> -->
        <?php
        $aboutUs= $data['aboutUs'];
        $image = $data['image'];
                echo
                "
                <form action ='/webProject/mvc/public/aaboutUs/update_AboutUs' method = 'POST'>
                <label>Image: <input type='file' id='iamge' name='image' accept='image/*'></label>
                <div class='about-text'>
                <h1>About Us</h1>
                <h5>Founder</h5>
                <label> Desc : <textarea rows='15' cols='80' name='aboutUs'  required>{$aboutUs}</textarea></label>
                <label> <input class ='saveButton' type= 'submit' name = 'save' value ='Save'/></label>
                </div>
                </form>";
        ?>
    </div>
   </section>
</body>
</html>