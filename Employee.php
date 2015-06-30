<?php

class Employee
{
    private $firstName;
    private $lastName;
    private $email;
    private $city;
    
    public function __construct($firstName, $lastName, $email, $city) 
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->city = $city;
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
    public function getFullEmployee() 
    {
        return $this->firstName . ' ' . $this->lastName . ' ' . $this->email . ' ' . $this->city;
    }
}