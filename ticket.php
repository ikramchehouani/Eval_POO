<?php

class Ticket {

    private $ref;
    private $price;


    public function __construct($ref, $price){

        $this->ref = $ref;
        $this->price = $price;

    }

    public function label(){

        echo "Reference: " . $this->ref;

    }

    public function cost(){

        $price = $this->price;
        $price = substr_replace($price, '.', -2, 0);

        echo "Price: " . $price . " €";

    }

    public function getRef(){

        return $this->ref;

    }

    public function getPrice(){

        $price = $this->price;
        $price = substr_replace($price, '.', -2, 0);
        return $price;

    }

    public function getTax(){

        return $price = $this->price * 1.1;

    }

    public function setPrice($price){

        $this->price = $price;

    }

    public function setRef($ref){

        $this->ref = $ref;

    }

    public function showTicket(){

        echo "----------------------------------------------------------------------------------------------------------</br>";
        echo "</br>";
        
        echo "Reference: " . $this->ref . "</br>";
        
        $price = $this->price;
        $price = substr_replace($price, '.', -2, 0);
        echo "Price: " . $price . " €" . "</br>";
        
        echo "</br>";

    }

}