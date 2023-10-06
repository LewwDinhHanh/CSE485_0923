<?php 
    require_once APP_ROOT.'/app/models/Author.php';
    class AuThorService{
        public function getAllAuthor(){
            //buoc1: ketnoi db
            try{
                $conn = new PDO('mysql:host=localhost;dbname=quanlythuvien','root','');
                $sql = "SELECT * FROM tacgia";
                $stmt = $conn->query($sql);

                $authors = [];
                while($row = $stmt->fetch()){
                    $author = new author($row['id'],$row['tenTacGia']);
                    $authors[] = $author;
                }
                return $authors;
            }catch(PDOException $e){
                return $authors = [];
            }
        }

    }
?>