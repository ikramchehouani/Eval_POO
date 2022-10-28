<?php
require('item.php');
require('shoppingCart.php');
require('freshItem.php');
require('ticket.php');

//Item : Corn Flakes
$item = new Item("Corn Flakes", 500, 5);

echo "----------------------------------------------------------------------------------------------------------</br>";
echo "</br>";

echo "Item : " . $item->getName() . "</br>";
echo "Price : " . $item->getPrice() . " €" . "</br>";

echo "</br>";

$item->showItem();

echo "</br>";

//Item : Chewing Gum
$chewingGum = new Item("Chewing Gum",403, 2);

echo "----------------------------------------------------------------------------------------------------------</br>";
echo "</br>";

echo "Item : " . $chewingGum->getName() . "</br>";
echo "Price : " . $chewingGum->getPrice() . " €" . "</br>";

echo "</br>";

$chewingGum->showItem();

echo "</br>";

//Item : Coca

$coca = new Item("Coca", 200, 40);

echo "----------------------------------------------------------------------------------------------------------</br>";
echo "</br>";

echo "Item : " . $coca->getName() . "</br>";
echo "Price : " . $coca->getPrice() . " €" . "</br>";

echo "</br>";

$coca->showItem();

echo "</br>";

$shoppingCart = new ShoppingCart();
$shoppingCart->addItem($item);
$shoppingCart->addItem($chewingGum);
$shoppingCart->showCart();

$shoppingCart->toString();

$mochi = new FreshItem("Mochi", 100, 1, "2022-11-02");

echo "----------------------------------------------------------------------------------------------------------</br>";
echo "</br>";

$mochi->showItem();

$ticket = new Ticket("RGBY17032012 - Walles-France", 9000);
$ticket->showTicket();

echo "----------------------------------------------------------------------------------------------------------</br>";
