<?php

require 'client/Book.php';
require 'client/Employee.php';
require 'client/Client.php';
require 'client/Hire.php';

$connection = @mysql_connect('localhost', 'library', 'library')
    or die('Brak połączenia z serwerem MySQL.<br />Błąd: '.mysql_error()); 

echo "Udało się połączyć z serwerem!<br />"; 

$db = @mysql_select_db('library', $connection) 
    or die('Nie mogę połączyć się z bazą danych<br />Błąd: '.mysql_error()); 

$book = new Book(1, 'Metro', 'Gluhowsky', 'apokalipsa');
$employee = new Employee('Jan', 'Kowalski', 'asdasdasdas@gmail.com', 'Warszawa');
$client = new Client(2, 'Anna', 'Kowalska', 'sadassdadas@o2.pl');
$hire = new Hire($book, $employee, '20-12-2015', '25-12-2015');

$query = "INSERT INTO `book` (`id`, `title`, `author`, `type`) VALUES ('', $book->getTitle, $book->getAuthor, $book->getType)";
$libraryRequest = mysql_query($query);

$query = "INSERT INTO `employee` (`id`, `firstname`, `lastname`, `email`, `city`) VALUES ('', $employee->getfirstName, $employee->getlastName, $employee->getEmail, $employee->getCity)";
$libraryRequest = mysql_query($query);

$query = "INSERT INTO `client` (`id`, `firstname`, `lastname`, `email`) VALUES ('', $client->getfirstName, $client->getlastName, $client->getEmail)";
$libraryRequest = mysql_query($query);

$query = "INSERT INTO `hire` (`id`, `hiredate`, `returndate`) VALUES ('',$hire->getHireDate, $hire->getReturnDate )";
$libraryRequest = mysql_query($query);
