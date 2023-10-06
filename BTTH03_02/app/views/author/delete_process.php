<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
}

try {
    $conn = new PDO("mysql:host=localhost;dbname=quanlythuvien", "root", "");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Bắt đầu một giao dịch
    $conn->beginTransaction();

    // Xóa các sách liên quan từ bảng "sach"
    $deleteBooksQuery = "DELETE FROM sach WHERE idTacGia = :id";
    $deleteBooksStmt = $conn->prepare($deleteBooksQuery);
    $deleteBooksStmt->bindParam(':id', $id);
    $deleteBooksStmt->execute();

    // Xóa tác giả từ bảng "tacgia"
    $deleteAuthorQuery = "DELETE FROM tacgia WHERE id = :id";
    $deleteAuthorStmt = $conn->prepare($deleteAuthorQuery);
    $deleteAuthorStmt->bindParam(':id', $id);
    $deleteAuthorStmt->execute();

    // Kiểm tra số dòng bị ảnh hưởng (số sách và tác giả đã bị xóa)
    $deletedRowCount = $deleteAuthorStmt->rowCount();
    if ($deletedRowCount > 0) {
        $conn->commit();
        header("Location: ../../../public/author.php?success=$id");
    } else {
        $conn->rollBack();
    }
} catch (PDOException $e) {
    echo $e->getMessage();
}
?>