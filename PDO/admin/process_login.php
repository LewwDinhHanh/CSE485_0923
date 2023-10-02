<?php
if(isset($_POST['sbmLogin'])){
    $user = $_POST['user'];
    $pass = $_POST['pass'];

    //Truy van thong tin:
    try{
        //Buoc 1: Ket noi DBServer
        $conn = new PDO("mysql:host=localhost;dbname=tek4", "root", "");
        //Buoc 2: Thuc hien truy van
        $sql_check = "SELECT * FROM users WHERE username = '$user' OR email = '$user'";
        $stmt = $conn->prepare($sql_check);
        $stmt->execute();
        //Buoc 3: Lay ra thong tin bao gom MAT KHAU

        if (!$stmt) {
            echo "Lỗi truy vấn: " . $conn->errorInfo()[2];
        } else{
            if($stmt->rowCount() > 0){
                $users = $stmt->fetch();
                //Lay ra mat khau
                $pass_plain = $users[3];
                if($pass === $pass_plain){
                    //CAP THE (authentication - Not: authorization)
                    session_start();
                    $_SESSION['isLogin'] = $users[1];
                    header("Location:index.php");
                }else{
                    header("Location:login.php?error=not-matched-password");
                }
            }else{
                header("Location:login.php?error=not-existed");
            }
        }


    }catch(PDOException $e){
        echo $e->getMessage();
    }
}
?>