<?php

class UpdateOneProduct {

 private function saveNewProduct ($_product){
    
        global $conn;
        $product = new Product;
        $product->idProduct = $_product->getId();
        $product->setName($_POST["name"]);
        $product->setDescription($_POST["description"]);
        $product->setPrice($_POST["price"]);
        if($_POST["image"] != null) $product->setImage($_POST["image"]);  
        if($_POST["image"] == null) $product->setImage($_product->getImage());
        //Update product
        $sql = "UPDATE windowstore.products
        SET Name = '{$product->getName()}', Description = '{$product->getDescription()}' , 
        Price ='{$product->getPrice()}', Image = '{$product->getImage()}' 
        Where idProducts = {$product->getId()}";

        if (mysqli_query($conn, $sql)) {
            header("Location: /webProject/mvc/public/pproducts/adminProducts");
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
}
    public function __construct($product) {
        $this->saveNewProduct($product);
    }
}