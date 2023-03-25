<?php

class GetOneProduct {
    public $product;
    private function getOneProduct($id){
        global $conn;
        $query = " SELECT * FROM windowstore.products WHERE idProducts ='{$id}'";
        $response = @mysqli_query($conn, $query);
        if ($response) {
            while ($row = mysqli_fetch_assoc($response)) {
                $product = new Product();
                $product->setId($id);
                $product->setName($row['Name']);
                $product->setDescription($row['Description']);
                $product->setImage ($row['Image']);
                $product->setPrice($row['Price']);
                $this->product= $product;           
        }
    }
}

    public function __construct($id) {
    	$this->getOneProduct($id);
    }
}