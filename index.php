<?php

require 'Book.php';
require 'Employee.php';
require 'Hire.php';

$book = new Book(1, 'Metro', 'Gluhowsky', 'apokalipsa');
$employee = new Employee('Jan', 'Kowalski', 'asdasdasdas@gmail.com', 'Warszawa');
$hire = new Hire(2, 'Anna', 'Kowalska', 'sadassdadas@o2.pl');
echo $book->getFullBook() . '<br>';
echo $employee->getFullEmployee() . '<br>';
echo $hire->getFullHire();