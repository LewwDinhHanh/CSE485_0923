<?php
if(isset($_POST['sbmSave'])){
    $ttg = $_POST['tenTacgia'];

    try{
        //Buoc 1: Ket noi DBServer
        $conn = new PDO("mysql:host=localhost;dbname=quanlythuvien", "root", "");
        //Buoc 2: Thuc hien truy van
        $sql_check = "SELECT * FROM tacgia WHERE tenTacGia = '$ttg'";
        $stmt = $conn->prepare($sql_check);
        $stmt->execute();

        //Buoc 3: Xử lý kết quả
        if($stmt->rowCount()>0){
            header("Location:add.php?error=existed");
        }else{
            // $pass_hash = password_hash($pass1, PASSWORD_DEFAULT);
            $sql_insert = "INSERT INTO tacgia (tenTacGia) VALUES ('$ttg')";
            $stmt = $conn->prepare($sql_insert);
            $stmt->execute();
            if($stmt->rowCount() > 0){
                header("Location:../../../public/author.php?success=added");
            }
        }

    }catch(PDOException $e){
        echo $e->getMessage();
    }
}