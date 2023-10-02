<?php
// Kết nối CSDL bằng PDO
$conn = new PDO("mysql:host=localhost;dbname=tek4", "root", "");

// Xác nhận xóa tất cả dữ liệu
if (isset($_POST['delete_all'])) {
    // Truy vấn SQL DELETE
    $sql = "DELETE FROM users";
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    // Chuyển hướng trở lại trang hiện tại sau khi xóa dữ liệu
    header("Location: index.php");
    exit();
}
?>