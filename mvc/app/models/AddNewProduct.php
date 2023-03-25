<?php
   class AddNewProduct{

    private function addNewProduct(){    
        global $conn;     
        $_name = $_POST["name"];
        $description = $_POST["description"];
        $price = $_POST["price"];
        $image = $_POST["image"];
        //add new movie
        $sql = "INSERT INTO windowstore.products (Name, Price,Description ,Image)
                VALUES ('{$_name}','{$price}','{$description}','{$image}')";
        if (mysqli_query($conn, $sql)) {
                    header("Location: /webProject/mvc/public/pproducts/adminProducts");
                } else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);

        }
   }

   public function __construct()
   {
    $this->addNewProduct();
   }
}