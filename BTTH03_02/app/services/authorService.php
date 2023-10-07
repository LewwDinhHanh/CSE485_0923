<?php 
    require_once APP_ROOT.'/app/models/Author.php';
    require_once APP_ROOT . "/app/libs/DBConnection.php";
    class AuthorService{
        public static function getAllAuthor(){
            //buoc1: ketnoi db
            try{
                $pdo = new DBConnection();
                $conn = $pdo->getConnection();
                $sql = "SELECT * FROM tacgia";
                $stmt = $conn->query($sql);

                $theloais = [];
                while($row = $stmt->fetch()){
                    $author = new Author($row['id'],$row['tenTacGia']);
                    $authors[] = $author;
                }
                return $authors;
            }catch(PDOException $e){
                return $authors = [];
                //$conn = null;
                //echo $e->getMessage();
            }
        }
        public static function create($tenTacGia){
            $pdo = new DBConnection();
            $conn = $pdo->getConnection();
            $sql = "INSERT INTO tacgia (tenTacGia) VALUES (?)";
            $stmt = $conn->prepare($sql);
            $stmt->execute([$tenTacGia]);
            
        }
        public static function delete($id)
            {
                $pdo = new DBConnection();
                $conn = $pdo->getConnection();
                $sql = "delete from tacgia where id = ?";
                $stmt=$conn->prepare($sql);
                $stmt->execute([$id]);
            }
        public static function findById($id)
            {
                $pdo = new DBConnection();
                $conn = $pdo->getConnection();
                $sql = "select * from tacgia where id=?";
                $stmt = $conn->prepare($sql);
                $stmt->execute([$id]);
                $data = $stmt->fetch();
                $theloai = new Author($data['id'],$data['tenTacGia']);
                return $theloai;
            }
    
        public static function edit($id,$tenTacGia)
            {
                $pdo = new DBConnection();
                $conn = $pdo->getConnection();
                $sql = "UPDATE tacgia SET tenTacGia=? WHERE id=?";
                $stmt = $conn->prepare($sql);
                $stmt->execute([$tenTacGia,$id]);
            }
    }
?>