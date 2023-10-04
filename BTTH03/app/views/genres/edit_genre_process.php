<?php
    if(isset($_POST['sbmSave'])) {
        $id = $_POST['id'];
        $genre = $_POST['tenTheLoai'];
    }

    try{
        //Buoc 1: Ket noi DBServer
        $conn = new PDO("mysql:host=localhost;dbname=quanlybaihat", "root", "");
        //Buoc 2: Thuc hien truy van
        $sql_check = "SELECT * FROM theloai WHERE (tenTheLoai = '$genre') AND id != '$id'";
        $stmt = $conn->prepare($sql_check);
        $stmt->execute();

        //Buoc 3: Xử lý kết quả
        if($stmt->rowCount()>0){
            header("Location:edit.php?error=existed");
        }else{
            $sql_update = "UPDATE theloai set tenTheLoai = '$genre' WHERE id='$id'";
            $stmt = $conn->prepare($sql_update);
            $stmt->execute();
            if($stmt->rowCount() > 0){
                header("Location:../../../public/genre.php?success=updated");
            }
        }

    }catch(PDOException $e){
        echo $e->getMessage();
    }
?>