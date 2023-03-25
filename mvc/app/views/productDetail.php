<!DOCTYPE html>
<html lang="en">
<?php include "$_SERVER[DOCUMENT_ROOT]/webProject/Templates/head.php";?>
<title>Product-Details</title>
<body>
<?php //session_start();
      if(isset($_SESSION['auth_user'])) : ?>
      <?php include "$_SERVER[DOCUMENT_ROOT]/webProject/Templates/menuBarLoggedIn.php";?>
     <?php else : ?>
      <?php include "$_SERVER[DOCUMENT_ROOT]/webProject/Templates/menuBar.php";?>
     <?php endif; ?>
<div class="detail">
        <div class="detail-container">
            <?php
            $product = $data['product']; 
            //$id = $product->id;
            if ($product->getId() == null) header("Location: /webProject/mvc/public/index");
            echo ("
                <div class='detail-item item1'>
                <h3> {$product->getName()}</h3>
                </div>
                <div class='detail-item item2'>
                    <img src='/webProject/mvc/public/Images/{$product->getImage()}' />
                </div>
                    <div class='detail-item item3'>
                <p>
                    {$product->getDescription()}
                </p>
                <ul>

                </ul>
                </div>
                <div class='detail-item item4'>
                    <h3>price: {$product->getPrice()}$</h3>
                </div>
                <div class='detail-item item5'>
                <button> Add To Basket</button>
                </div>");
            ?>
        </div>
    </div>
</body>
</html>