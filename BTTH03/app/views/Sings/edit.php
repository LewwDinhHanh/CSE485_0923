<?php
    if(isset($_GET['id'])){
    $uid = $_GET['id'];

    try{
        //Buoc 1: Ket noi DBServer
        $conn = new PDO("mysql:host=localhost;dbname=quanlybaihat", "root", "");
        //Buoc 2: Thuc hien truy van
        $sql_check = "SELECT * FROM baihat WHERE id ='$uid'";
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
    <title>Home page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container border border-success mt-3">
        <div class="row">
            <div class="col-md">
                <?php
                    if(isset($_GET['error'])){
                        echo "<p style='background-color:orange'>{$_GET['error']}</p>";
                    }
                ?>
                <span class="text-success fs-1">Sửa Bài Hát</span>
                <form class="mt-2" action="edit_sing_process.php" method="post">   
                    <div class="mb-3">
                        <label class="form-label">Tên Bài Hát</label>
                        <input type="text" class="form-control" name="sing" value="<?= $user['tenBaiHat']; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Ca Sĩ</label>
                        <input type="text" class="form-control" name="casi" value="<?= $user['caSi']; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">ID Thể Loại</label>
                        <input type="text" class="form-control" name="idtl" value="<?= $user['idTheLoai']; ?>">
                    </div>
                    <button type="submit" class="btn btn-primary m-2" name="">Sửa</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>