<?php
if(isset($_POST['sbmSave'])){
    $book = $_POST['book'];
    $nxb = $_POST['nxb'];
    $id= $_POST['idtg'];

    try{
        //Buoc 1: Ket noi DBServer
        $conn = new PDO("mysql:host=localhost;dbname=quanlythuvien", "root", "");
        //Buoc 2: Thuc hien truy van
        $sql_check = "SELECT * FROM sach WHERE tenSach = '$book'";
        $stmt = $conn->prepare($sql_check);
        $stmt->execute();

        //Buoc 3: Xử lý kết quả
        if($stmt->rowCount()>0){
            header("Location:add.php?error=existed");
        }else{
            // $pass_hash = password_hash($pass1, PASSWORD_DEFAULT);
            $sql_insert = "INSERT INTO sach (tenSach,namxuatban, idTacGia) VALUES ('$book', '$nxb', '$id')";
            $stmt = $conn->prepare($sql_insert);
            $stmt->execute();
            if($stmt->rowCount() > 0){
                header("Location:../../../public/index.php?success=added");
            }
        }

    }catch(PDOException $e){
        echo $e->getMessage();
    }
}