<?php
    if(isset($_GET['id'])){
        $id = $_GET['id'];
    }

    try{
        //Buoc 1: Ket noi DBServer
        $conn = new PDO("mysql:host=localhost;dbname=tek4", "root", "");
        //Buoc 2: Thuc hien truy van
        $sql = "DELETE FROM users WHERE id = '$id'";
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        //Buoc 3: Xử lý kết quả
        $rowCount = $stmt->rowCount();
        if($rowCount>0){
           echo "Deleted $rowCount row(s).";
            header("Location: index.php?success=$id");
        }

    }catch(PDOException $e){
        echo $e->getMessage();
    }

?>