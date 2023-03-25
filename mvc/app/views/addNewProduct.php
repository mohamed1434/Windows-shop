<!DOCTYPE html>
<html lang="en">
<?php include "$_SERVER[DOCUMENT_ROOT]/webProject/Templates/head.php";?>
<title>Add-Product</title>
<body>
<?php include "$_SERVER[DOCUMENT_ROOT]/webProject/Templates/adminMenuBar.php";?>
<form class="newProduct" action='/webProject/mvc/public/pproducts/saveNewProduct' method='POST'>
    <label>Name: <input type="text" id="name" name="name" required></label>
    <label>Description: <textarea rows="15" cols="80" name="description" required> </textarea></label>
    <label>Price: <input type="number" id="price" name="price"  required></label>
    <label>Image: <input type="file" id="iamge" name="image" accept="image/*" required></label>
    <label><input class="saveButton" type="submit" name="save" value="Save"></label>
</form>
</body>
</html>