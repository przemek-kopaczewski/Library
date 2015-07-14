<?php

require 'client/Book.php';
require 'client/Employee.php';
require 'client/Client.php';
require 'client/Hire.php';

$book = new Book(1, 'Metro', 'Gluhowsky', 'apokalipsa');
$employee = new Employee('Jan', 'Kowalski', 'asdasdasdas@gmail.com', 'Warszawa');
$client = new Client(2, 'Anna', 'Kowalska', 'sadassdadas@o2.pl');
echo $book->getAllInfoBook() . '<br>';
echo $employee->getAllInfoEmployee() . '<br>';
echo $client->getAllInfoClient(). '<br>';

$hire = new Hire($book, $employee, '20-12-2015', '25-12-2015');
echo $hire->getAllInfoHire();