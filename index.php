<?php

require 'connect.php';
require 'client/Book.php';
require 'client/Employee.php';
require 'client/Client.php';
require 'client/Hire.php';
 
$book = new Book(1, 'Metro', 'Gluhowsky', 'apokalipsa');
$employee = new Employee(2, 'Jan', 'Kowalski', 'asdasdasdas@gmail.com', 'Warszawa');
$client = new Client(3, 'Anna', 'Kowalska', 'sadassdadas@o2.pl');
$hire = new Hire(4, $book, $employee, '2015-12-15', '2015-12-26');

$query = "INSERT INTO `book` (`id`, `title`, `author`, `type`) VALUES ('1', '{$book->getTitle()}', '{$book->getAuthor()}', '{$book->getType()}')";
$libraryRequest = mysql_query($query);

$query = "INSERT INTO `employee` (`id`, `firstname`, `lastname`, `email`, `city`) VALUES ('2', '{$employee->getfirstName()}', '{$employee->getlastName()}', '{$employee->getEmail()}', '{$employee->getCity()}')";
$libraryRequest = mysql_query($query);

$query = "INSERT INTO `client` (`id`, `firstname`, `lastname`, `email`) VALUES ('3', '{$client->getfirstName()}', '{$client->getlastName()}', '{$client->getEmail()}')";
$libraryRequest = mysql_query($query);

$query = "INSERT INTO `hire` (`id`, `id_client`, `id_book`, `id_employee`, `hiredate`, `returndate`) VALUES ('4', '{$client->getId()}', '{$book->getId()}', '{$employee->getId()}', '{$hire->getHireDate()}', '{$hire->getReturnDate()}')";
var_dump($query);
$libraryRequest = mysql_query($query);
