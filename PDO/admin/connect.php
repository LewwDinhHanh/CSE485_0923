<?php
    try{
        //Buoc 1: Mo ket noi
        $conn = new PDO("mysql:host=localhost;dbname=tek4", "root","");
        //Buoc 2: Thuc hien truy van
        $sql = "SELECT * FROM users";
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        //Buoc 3: Xu ly ket qua
        $user = $stmt->fetchAll();
    }catch(PDOException $e){
        echo "Error: ".$e->getMessage();
    }
?>