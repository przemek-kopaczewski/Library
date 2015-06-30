<?php

class Client
{
    private $id;
    private $firstName;
    private $lastName;
    private $email;
    
    public function __construct($id, $firstName, $lastName, $email) 
    {
        $this->id = $id;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
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
    public function getFullHire()
    {
        return $this->id . ' ' . $this->firstName . ' ' . $this->lastName . ' ' . $this->email;
    }
}