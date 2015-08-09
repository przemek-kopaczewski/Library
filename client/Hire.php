<?php

class Hire
{
    private $id;
    private $hireDate;
    private $returnDate;
    
    public function __construct($id, Book $book, Employee $employee, $hireDate, $returnDate)
    {
        $this->id = $id;
        $this->employee = $employee;
        $this->book = $book;
        $this->hireDate = $hireDate;
        $this->returnDate = $returnDate;
    }
    
    public function getId()
    {
        return $this->id;
    }
    
    public function getHireDate()
    {
        return $this->hireDate;
    }
    
    public function getReturnDate()
    {
        return $this->returnDate;
    }
    public function getAllInfoHire()
    {
        return $this->hireDate . ' ' . $this->returnDate;
    }
}