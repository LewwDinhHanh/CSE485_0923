<?php 
class Author{
    private $id;
    private $nameAuthor;

    public function __construct($id, $nameAuthor){
        $this->id = $id;
        $this->nameAuthor = $nameAuthor;
    }
    public function getId(){
        return $this->id;
    }
    public function setId($id){
        $this->id = $id;

    }
    public function getNameAuthor(){
        return $this->nameAuthor;
    }
    public function setTenTheLoai($nameAuthor){
        $this->nameAuthor = $nameAuthor;
        
    }
}
?>