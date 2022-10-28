<?php

 class FreshItem extends Item {

    private $expirationDate;

    public function __construct($name, $price, $weight, $expirationDate){

        parent::__construct($name, $price, $weight);
        $this->expirationDate = $expirationDate;

    }

    public function getExpirationDate(){

        return $this->expirationDate;

    }

    public function getTax(){

        $price = $this->getPrice();
        $weight = $this->getWeight();
        if($this->getExpirationDate() == null){

            $price = $price * 1.1;

        }else{
            if($weight > 1000){
                $kilos = $weight / 1000;
                $tax = 1.1 - (0.01 * $kilos);
                $price = $price * $tax;
            }
        }
    }

    public function setExpirationDate($expirationDate){
        $this->expirationDate = $expirationDate;
    }

    public function showItem(){
        echo "Date of expiration: " . $this->expirationDate . "</br>";
        parent::showItem();
    }

}

?>