<?php

// header('Location: dashboard.php');

require_once 'models/Book.php';
require_once 'models/Customer.php';

$book = new Book('12345', 'Laravel Book', 'Hotash Ahmed');

echo $book->title."\n";
echo $book->getTitle()."\n";
echo $book->author."\n";
echo $book->getAuthor()."\n";
$book->seller = "Rokomari";
echo $book->available."\n";
$book->setAvailable(20)."\n";
echo $book->available."\n";
echo $book->seller."\n";

echo $book;

echo "------";

$customer = new Customer(12345, 'Hotash', 'Ahmed', 'bdsumon4u@gmail.com');

echo $customer->id."\n";
echo $customer->getFirstName()."\n";
echo $customer->lastName."\n";
echo $customer->getEmail()."\n";
$customer->referrer = "bdsumon4u";
echo $customer->referrer."\n";

echo $customer;
