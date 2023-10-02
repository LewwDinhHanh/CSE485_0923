<?php
if (isset($_POST['btndky'])) {
    $user = $_POST['username'];
    $email = $_POST['email'];
    $pass1 = $_POST['pass1'];
    $pass2 = $_POST['pass2'];

    if ($pass1 === $pass2) {
        // Băm mật khẩu
        $hashed_password = password_hash($pass1, PASSWORD_DEFAULT);

        // Truy vấn thêm thông tin vào cơ sở dữ liệu
        try {
            // Bước 1: Kết nối DBServer
            $conn = new PDO("mysql:host=localhost;dbname=tek4", "root", "");
            // Bước 2: Thực hiện truy vấn thêm thông tin
            $sql_insert = "INSERT INTO users (username, email, password) VALUES ('$user', '$email', '$hashed_password')";
            $stmt = $conn->prepare($sql_insert);
            $stmt->execute();

            // Đăng ký thành công
            header("Location: login.php");
            exit(); // Kết thúc script sau khi chuyển hướng
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    } else {
        // Chuyển hướng về trang đăng ký và hiển thị thông báo lỗi
        echo "<script>alert('Mật khẩu không khớp. Vui lòng nhập lại.');</script>";
        echo "<script>window.location.href = 'dangky.php';</script>";
        exit(); // Kết thúc script sau khi chuyển hướng
    }
}
?>