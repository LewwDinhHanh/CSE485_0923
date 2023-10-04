<?php 
    require_once APP_ROOT.'/app/models/song.php';
    class BaiHatService{
        public function getAllBaiHat(){
            //buoc1: ketnoi db
            try{
                $conn = new PDO('mysql:host=localhost;dbname=quanlybaihat','root','');
                $sql = "SELECT * FROM baihat";
                $stmt = $conn->query($sql);

                $BaiHats = [];
                while($row = $stmt->fetch()){
                    $baihat = new BaiHat($row['id'],$row['tenBaiHat'],$row['caSi'],$row['idTheLoai']);
                    $BaiHats[] = $baihat;
                }
                return $BaiHats;
            }catch(PDOException $e){
                return $BaiHats = [];
            }
        }
        public static function delete($id)
        {
            $conn = new PDO('mysql:host=localhost;dbname=quanlybaihat','root','');
            $sql = "delete from baihat where id = ?";
            $stmt=$conn->prepare($sql);
            $stmt->execute([$id]);
        }
    }
?>