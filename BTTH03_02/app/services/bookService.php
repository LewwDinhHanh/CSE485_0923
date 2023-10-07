<?php 
    require_once APP_ROOT.'/app/models/Book.php';
    require_once APP_ROOT . "/app/libs/DBConnection.php";
    class BookService{
        public static function getAllBook(){
            //buoc1: ketnoi db
            try{
                $pdo = new DBConnection();
                $conn = $pdo->getConnection();
                $sql = "SELECT * FROM sach ORDER BY id DESC";
                $stmt = $conn->query($sql);

                $BaiHats = [];
                while($row = $stmt->fetch()){
                    $book = new Book($row['id'],$row['tenSach'],$row['namxuatban'],$row['idTacGia']);
                    $Books[] = $book;
                }
                return $Books;
            }catch(PDOException $e){
                

            }
        }
        public static function create($tenSach, $namxuatban, $idTacGia){
            $pdo = new DBConnection();
            $conn = $pdo->getConnection();
            $sql = "INSERT INTO sach (tenSach, namxuatban, idTacGia) VALUES (?, ?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->execute([$tenSach, $namxuatban, $idTacGia]);
            
        }
        public static function delete($id)
            {
                $pdo = new DBConnection();
                $conn = $pdo->getConnection();
                $sql = "delete from sach where id = ?";
                $stmt=$conn->prepare($sql);
                $stmt->execute([$id]);
            }
        public static function findById($id)
            {
                $pdo = new DBConnection();
                $conn = $pdo->getConnection();
                $sql = "select * from sach where id=?";
                $stmt = $conn->prepare($sql);
                $stmt->execute([$id]);
                $data = $stmt->fetch();
                $book = new Book($data['id'],$data['tenSach'],$data['namxuatban'],$data['idTacGia']);
                return $book;
            }
    
        public static function edit($id,$tenSach, $namxuatban, $idTacGia)
            {
                $pdo = new DBConnection();
                $conn = $pdo->getConnection();
                $sql = "UPDATE sach SET tenSach=?, namxuatban=?, idTacGia=? WHERE id=?";
                $stmt = $conn->prepare($sql);
                $stmt->execute([$tenSach, $namxuatban, $idTacGia,$id]);
            }
    }
?>