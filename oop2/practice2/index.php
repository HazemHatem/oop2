<?php


require_once "Product.php";
require_once "Book.php";
require_once "BabyCar.php";
require_once "Gift.php";


$book = new Book('The Catcher in the Rye', 10, 'A novel', 'J. D. Salinger', 'red', 'Penguin');

$book->AddPublishers('Penguin');
$book->AddPublishers('HarperCollins');
$book->AddPublishers('Macmillan');
echo $book->uploadimage('book.png');
echo "<br>";
echo $book->choosePublisher();
echo "<br>";
echo $book->getwriter();
echo "<br>";
echo $book->getcolor();
echo "<br>";
echo $book->getsupplier();
echo "<br>";
echo "<pre>";
var_dump($book);
echo "</pre>";


echo "<br>";


$car = new BabyCar('BMW', 100, 'A car', 2, 5);

$car->AddMaterials('wheels');
$car->AddMaterials('engine');
$car->AddMaterials('carriage');
echo $car->uploadimage('car.png');
echo "<br>";
var_dump($car->getMaterials());
echo "<br>";
echo $car->getAge();
echo "<br>";
echo $car->getWeight();
echo "<br>";
echo "<pre>";
var_dump($car);
echo "</pre>";


echo "<br>";


$gift = new Gift('Gift', 100, 'A gift', 'Gift');
echo $gift->uploadimage('gift.png');
echo "<br>";
echo "<pre>";
var_dump($gift);
echo "</pre>";
