<?php

class Hire
{
    private $hireDate;
    private $returnDate;
    
    public function __construct(Book $book, Employee $employee, $hireDate, $returnDate, $id)
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