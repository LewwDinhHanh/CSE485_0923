<?php
class Book{
    private $id;
    private $nameBook;
    private $year;
    private $idAuthor;

    public function __construct($id, $nameBook, $year, $idAuthor){
        $this->id = $id;
        $this -> nameBook = $nameBook;
        $this -> year = $year;
        $this -> idAuthor = $idAuthor;
    }
    public function getId(){
        return $this->id;
    }
    public function getNameBook(){
        return $this->nameBook;
    }
    public function getYear(){
        return $this->year;
    }
    public function getIdAuthor(){
        return $this->idAuthor;
    }

    public function setId($id){
        $this->id = $id;

    }
    public function setNameBook($nameBook){
        $this->nameBook = $nameBook;
        
    }
    public function setYear($year){
        $this->year = $year;
        
    }
    public function setIdAuthor($idAuthor){
        $this->idAuthor = $idAuthor;
        
    }
}
?>