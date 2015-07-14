<?php

class Book
{
    private $id;
    private $title;
    private $author;
    private $type;
    
    public function __construct($id, $title, $author, $type) 
    {
        $this->id = $id;
        $this->title = $title;
        $this->author = $author;
        $this->type = $type;
    }
    
    public function getId()
    {
        return $this->id;
    }
    
    public function getTitle()
    {
        return $this->title;
    }
    
    public function getAuthor()
    {
        return $this->author;
    }
    
    public function getType()
    {
        return $this->type;
    }
    
    public function getAllInfoBook() 
    {
        return $this->id . ' ' . $this->title . ' ' . $this->author . ' ' . $this->type;
    }
}