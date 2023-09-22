<?php
    $sever = 'localhost';
    $user = 'root';
    $pass = '';
    $database = 'example';

    $conn = new mysqli($sever,$user,$pass,$database);

    if ($conn ->connect_error){
        die("ket noi that bai: ".$conn->connect_error);
    }

    $sql = "SELECT * FROM user";

    $result = $conn->query($sql);

    if ($result->num_rows > 0){
        $data = [];
        while ($row = $result->fetch_assoc()){
            $data[] = $row;
        }
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    }
?>