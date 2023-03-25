<!DOCTYPE html>
<html lang="en">
<?php include "$_SERVER[DOCUMENT_ROOT]/webProject/Templates/head.php";?>
<title>Edit-Product</title>
<body>
<?php include "$_SERVER[DOCUMENT_ROOT]/webProject/Templates/adminMenuBar.php";?>
<?php
   $product = $data['product'];
   if ($product->getId() == null) //header("Location: /webProject/mvc/public/adminPage");
     echo "there is no id";

   echo "<div class = deleteButtonContainer>
           <form action='/webProject/mvc/public/pproducts/deleteProduct/{$product->getId()}' method='POST'>
           <button class = 'deleteButton' name = 'deleteMovie'>Delete Product</button> </form>  </div>
           <div class='containerr'>
            
           <form action='/webProject/mvc/public/pproducts/updateProduct/{$product->getId()}/{$product->getImage()}' name ='foo' method='POST'>
               <label>Name: <input type='text' id='name' name='name' value='{$product->getName()}'required></label>
               <label>Description: <textarea rows='15' cols='80' name='description'  required>{$product->getDescription()}</textarea></label>
               <label>Price: <input type='number' id='price' name='price' value ='{$product->getPrice()}' required></label>
               <label>Image: <input type='file' id='iamge' name='image' accept='image/*'></label>
               <label><input class='saveButton' type='submit' name='save' value='Save'></label>
           </form>
           </div>
           ";
   
   ?>
</body>
</html>