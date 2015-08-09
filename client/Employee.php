<?php

class Employee
{
    private $id;
    private $firstName;
    private $lastName;
    private $email;
    private $city;
    
    public function __construct($id, $firstName, $lastName, $email, $city) 
    {
        $this->id = $id;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->city = $city;
    }
    
    public function getId()
    {
        return $this->id;
    }

    public function getfirstName()
    {
        return $this->firstName;
    }
    
    public function getlastName()
    {
        return $this->lastName;
    }
    
    public function getEmail()
    {
        return $this->email;
    }
    
    public function getCity()
    {
        return $this->city;
    }
    public function getAllInfoEmployee() 
    {
        return $this->firstName . ' ' . $this->lastName . ' ' . $this->email . ' ' . $this->city;
    }
}