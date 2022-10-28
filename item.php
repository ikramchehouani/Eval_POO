<?php

class Item {

    private $name;
    private $price;
    private $weight;

    public function __construct($name, $price, $weight){

        $this->name = $name;
        $this->price = $price;
        $this->weight = $weight;

    }

    public function getName(){

        return $this->name;

    }


    public function getPrice(){
        
        $price = $this->price;
        $price = substr_replace($price, '.', -2, 0);
        return $price;

    }

    public function setName($name){

        $this->name = $name;

    }

    public function setPrice($price){

        $this->price = $price;

    }

    public function getWeight(){

        return $this->weight;

    }
    

    public function setWeight($weight){

        $this->weight = $weight;

    }

    public function getTax(){

        return $price = $this->price * 1.1;

    }

    public function showItem(){

        echo "The item is : ". $this->name . "</br>";

        $price = $this->price;
        $price = substr_replace($price, '.', -2, 0);
        echo "It's price is : " . $price . " €" . "</br>";
        
        echo "It's weight is : " . $this->weight . "g" . "</br>";
        

    }

}

?>

