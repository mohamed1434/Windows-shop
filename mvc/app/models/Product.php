<?php
class Product{
    public $idProduct;
    public $Name;
    public $Description;
    public $Price;
    public $Image;

    public function setId($id){
        $this->idProduct = $id;
    }

    public function setName($name){
        $this->Name =$name;
    }
    
    public function setDescription($description){
        $this->Description =$description;
    }
    public function setPrice($price){
        $this->Price =$price;
    }
    
    public function setImage($image){
        $this->Image =$image;
    }

    public function getId(){
        return $this->idProduct;
    }
    
    public function getImage(){
        return $this->Image;
     }
     public function getName(){
        return $this->Name;
    }
    public function getPrice(){
        return $this->Price;
    }
     public function getDescription(){
        return $this->Description;
     }
    public function __construct() {
    }
}