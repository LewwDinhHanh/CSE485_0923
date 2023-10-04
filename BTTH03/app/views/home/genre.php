<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <style>
        .container{
            border: 1px solid black;
        }
    </style>
    <title>Homepage</title>
</head>
<body>
<div class = "container">
        <h3 class="text-center text-uppercase text-success my-3">Thể Loại</h3>
        <a href="<?=DOMAIN.'app/views/genres/add.php' ;?>" class = 'btn btn-success'>Thêm mới</a>
        <a href="index.php" class="btn btn-success">Bài hát</a>
        <table class="table">
            <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Tên Thể Loại</th>
                <th scope="col">Sửa</th>
                <th scope="col">Xóa</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    foreach($theloais as $theloai){
                ?>
                        <tr>
                        <th scope="row"><?php echo $theloai->getId();?></th>
                        <td><?php echo $theloai->getTenTheLoai();?></td>
                        
                        <td>
                            <a href="../app/views/genres/edit.php?id=<?= $theloai->getId(); ?>"><i class="bi bi-pencil-square"></i></a>
                        </td>
                        <td>
                                <a href="../app/views/genres/delete_process.php?id=<?= $theloai->getId(); ?>" <?= $theloai->getId(); ?> onclick="return confirm('Bạn có chắc chắn muốn xoá?');">
                                    <i class="bi bi-trash3"></i>
                                </a>
                        </td>
                </tr>
                <?php
                    }
                ?>
                
            </tbody>
        </table>
    </div>
<script src="./libs/bootstrap-5.3.2-dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>