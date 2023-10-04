<?php
if(isset($_POST['sbmSave'])){
    $sing = $_POST['sing'];
    $casi = $_POST['casi'];
    $id= $_POST['idtl'];

    try{
        //Buoc 1: Ket noi DBServer
        $conn = new PDO("mysql:host=localhost;dbname=quanlybaihat", "root", "");
        //Buoc 2: Thuc hien truy van
        $sql_check = "SELECT * FROM baihat WHERE tenBaiHat = '$sing'";
        $stmt = $conn->prepare($sql_check);
        $stmt->execute();

        //Buoc 3: Xử lý kết quả
        if($stmt->rowCount()>0){
            header("Location:add.php?error=existed");
        }else{
            // $pass_hash = password_hash($pass1, PASSWORD_DEFAULT);
            $sql_insert = "INSERT INTO baihat (tenBaiHat,caSi, idTheLoai) VALUES ('$sing', '$casi', '$id')";
            $stmt = $conn->prepare($sql_insert);
            $stmt->execute();
            if($stmt->rowCount() > 0){
                header("Location:public/index.php?success=added");
            }
        }

    }catch(PDOException $e){
        echo $e->getMessage();
    }
}