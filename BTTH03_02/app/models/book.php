<?php

class Book{
    private $id,$bookname, $year, $idAuthor;

    public function __construct($id,$bookname, $year, $idAuthor)
    {
        $this->id = $id;
        $this->bookName = $bookname;
        $this->year = $year;
        $this->idAuthor = $idAuthor;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getBookName()
    {
        return $this->bookName;
    }

    public function setBookName($bookname)
    {
        $this->bookName = $bookname;
    }

    public function getYear()
    {
        return $this->year;
    }

    public function setYear($year)
    {
        $this->year = $year;
    }

    public function getIdAuthor()
    {
        return $this->idAuthor;
    }

    public function setIdAuthor($idAuthor)
    {
        $this->idAuthor = $idAuthor;
    }

}