<?php 
    require_once APP_ROOT.'/app/models/book.php';
    class BookService{
        public function getAllBook(){
            //buoc1: ketnoi db
            try{
                $conn = new PDO('mysql:host=localhost;dbname=quanlythuvien','root','');
                $sql = "SELECT * FROM sach";
                $stmt = $conn->query($sql);

                $books = [];
                while($row = $stmt->fetch()){
                    $book = new Book($row['id'],$row['tenSach'],$row['namxuatban'],$row['idTacGia']);
                    $books[] = $book;
                }
                return $books;
            }catch(PDOException $e){
                return $books = [];
                //$conn = null;
                //echo $e->getMessage();
            }
        }
    }
?>