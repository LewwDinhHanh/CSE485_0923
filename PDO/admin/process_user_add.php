<?php
if(isset($_POST['sbmSave'])){
    $user = $_POST['user'];
    $email = $_POST['mail'];
    $pass1 = $_POST['pass1'];
//    $pass2 = $_POST['pass2'];

//    if($pass1 != $pass2){
//        $error = "Mật khẩu không khớp";
//        header("Location: user_add.php?error=$error");
//    }

    try{
        //Buoc 1: Ket noi DBServer
        $conn = new PDO("mysql:host=localhost;dbname=tek4", "root", "");
        //Buoc 2: Thuc hien truy van
        $sql_check = "SELECT * FROM users WHERE username = '$user' OR email='$email'";
        $stmt = $conn->prepare($sql_check);
        $stmt->execute();

        //Buoc 3: Xử lý kết quả
        if($stmt->rowCount()>0){
            header("Location:user_add.php?error=existed");
        }else{
            // $pass_hash = password_hash($pass1, PASSWORD_DEFAULT);
            $sql_insert = "INSERT INTO users (username, email, password) VALUES ('$user', '$email', '$pass1')";
            $stmt = $conn->prepare($sql_insert);
            $stmt->execute();
            if($stmt->rowCount() > 0){
                header("Location:index.php?success=added");
            }
        }

    }catch(PDOException $e){
        echo $e->getMessage();
    }
}