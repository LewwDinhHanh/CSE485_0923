<?php
    if(isset($_GET['id'])){
    $uid = $_GET['id'];

    try{
        //Buoc 1: Ket noi DBServer
        $conn = new PDO("mysql:host=localhost;dbname=quanlythuvien", "root", "");
        //Buoc 2: Thuc hien truy van
        $sql_check = "SELECT * FROM tacgia WHERE id ='$uid'";
        $stmt = $conn->prepare($sql_check);
        $stmt->execute();

        //Buoc 3: Xử lý kết quả
        if($stmt->rowCount()>0){
            $user = $stmt->fetch();
        }

    }catch(PDOException $e){
        echo $e->getMessage();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container border border-success mt-3">
        <div class="row">
            <div class="col-md">
                <form class="mt-5" action="edit_author_process.php" method="post">
                    <span class="text-success fs-1">Sửa Tác Giả</span>
                    <div class="mb-3">
                        <label class="form-label">ID Tác Giả</label>
                        <input type="text" class="form-control bg-warning" name="id" value="<?= $user['id']; ?>" readonly>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Tên Tác Giả</label>
                        <input type="text" class="form-control" name="tenTacgia" value="<?= $user['tenTacGia']; ?>">
                    </div>
                    <button type="submit" class="btn btn-primary mb-2" name="sbmSave">Sửa</button>
                    <a href="../../../public/author.php" class="btn btn-primary mb-2">Quay lại</a>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>