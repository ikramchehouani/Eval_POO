<?php

class ShoppingCart{
  
    private $items = array();
    private $id;

    public function __construct(){

        $this->id = uniqid();

    }


    public function addItem($item){

        $weight = $item->getWeight();

        //10000g = 10kg
        $n = 10000;

        if ($weight < $n ){

            $this->items[] = $item;

        }else {

            echo "The Item should weight below 10000g (10Kg)" . "</br>" ;

        }
    }

    public function removeItem($item){

        $index = array_search($item, $this->items);

        if($index !== false){

            unset($this->items[$index]);
            return true;

        }else {

            return false;

        }
    }
  
    public function getItems(){

        return $this->items;

    }
  
    public function getId(){

        return $this->id;

    }

    public function itemCount(){

        return count($this->items);
    }

    public function getTotalPrice(){
        $totalPrice = 0;

        foreach($this->items as $item){
            $totalPrice += $item->getPrice();
        }

        return $totalPrice;

    }
  
    public function toString(){

        echo "----------------------------------------------------------------------------------------------------------</br>";
        echo "</br>";
        
        echo "The Shopping cart with the Id: " . "<span style = 'color:#A020F0'>" . $this->id . "</span>" . " holds " . $this->itemCount() . " items.";
        echo "</br>";
        echo "Total price: " . $this->getTotalPrice();
        echo "</br>";
        echo "</br>";
        echo " The items: " . "<br>";

        foreach($this->items as $item){
            echo " - ". $item->getName() . " with a price of " . $item->getPrice() . " € and a weight of " . $item->getWeight() . "g" . "<br>";
        }

    }


    public function showCart(){

        echo "----------------------------------------------------------------------------------------------------------</br>";
        echo "</br>";

        echo "Cart Id: " . "<span style = 'color:#A020F0'>" . $this->id . "</span>" .  "</br>";
        echo "Total items: " . $this->itemCount() . "</br>";
        echo "</br>";

        foreach($this->items as $item){
            $item->showItem();
        }

    }
  
}