<!DOCTYPE html>
<html lang="en">
<?php include "$_SERVER[DOCUMENT_ROOT]/webProject/Templates/head.php";?>
<title>Admin-Products</title>
<body>
<?php include "$_SERVER[DOCUMENT_ROOT]/webProject/Templates/adminMenuBar.php";?>
<div class="containerr">
    <div class="roww">
     <div class="columnn">
     <form action="/webProject/mvc/public/pproducts/addProduct" method="POST">
      <button name="addButton" type="submit" class="add_btn">Add item</button>
      </form>
              <?php
        foreach($data['products'] as $row){
                echo
                "<div class='item'>
                <form action='/webProject/mvc/public/pproducts/editProduct/{$row->id}' method='POST'>
      <button name='addButton' type='submit' class='add_btn'>Edit item</button>
      </form>
                <img src='/webProject/mvc/public/Images/" . $row->image ."' alt='Denim Jeans' style='width:100%'>
                <h1 class='productHeader'>". $row->name ."</h1>
                <p class='price'>$". $row->price ."</p>
                <p>". $row->description ."</p>
                </div>";
            }
        ?>
     </div>
    </div>
 </div>
</body>
</html>