<?php

class Author{
    private $id,$nameAuthor;

    public function __construct($id, $nameAuthor)
    {
        $this->id = $id;
        $this->nameAuthor = $nameAuthor;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getNameAuthor()
    {
        return $this->nameAuthor;
    }

    public function setNameAuthor($nameAuthor)
    {
        $this->nameAuthor = $nameAuthor;
    }
}