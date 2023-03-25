<!DOCTYPE html>
<html lang="en">
<?php include "$_SERVER[DOCUMENT_ROOT]/webProject/Templates/head.php";?>
<title>Products</title>
 <body>
 <?php //session_start();
      if(isset($_SESSION['auth_user'])) : ?>
      <?php include "$_SERVER[DOCUMENT_ROOT]/webProject/Templates/menuBarLoggedIn.php";?>
     <?php else : ?>
      <?php include "$_SERVER[DOCUMENT_ROOT]/webProject/Templates/menuBar.php";?>
     <?php endif; ?>
   <div class="containerr">
    <div class="roww">
     <div class="columnn">
              <?php
        foreach($data['products'] as $row){
                echo
                "<div class='item'>";
                echo
                "
                <a href='/webProject/mvc/public/pproducts/productDetail/{$row->id}' target='new window'><img src='../public/Images/" 
                . $row->image ."' alt='Denim Jeans' style='width:100%'></a>
                <h1 class='productHeader'>". $row->name ."</h1>
                <p class='price'>$". $row->price ."</p>
                <p>". $row->description ."</p>
                <p><button>Add to Cart</button></p>
                </div>";
            }
        ?>
     </div>
    </div>
 </div>
 </body>
</html>