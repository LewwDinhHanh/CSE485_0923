<?php 
    include "connect.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TEK4</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="">
    <style>
        /* Tùy chỉnh màu khi hover */
        .page-link:hover {
            color: white; /* Màu sẽ thay đổi khi hover vào */
            background-color: orangered;
        }
        .nav-item{
            padding-top: 10px;
            padding-left: 10px;
        }
    </style>
</head>
<body>
    <div class="container-fluid"> <!-- fluid: full màn hình -->
        <div class="row"> <!-- row: chia hàng -->
            <div class="col-2 p-3">    <!-- bg: background; col: chia cột -->
                <img src="../img/icon-chat.png" class="pb-4 pt-2" alt="logo" style="width: 200px;">
                <ul class="nav flex-column fs-4">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">
                            <i class="bi bi-person"></i>
                            User
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="bi bi-gear"></i>
                            Config
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="bi bi-star"></i>
                            Bootstrap
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="bi bi-table"></i>
                            Table
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="bi bi-book"></i>
                            Courses
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-10 p-3">
                <div class="header d-flex align-items-center justify-content-between">
                    <div class="d-flex align-items-center">
                        <i class="bi bi-list fs-1"></i>
                        <span class="fs-1">USERS</span>
                    </div>
                    
                        <div class="row">
                            <div class="input-group p-3 col-md-3">
                                <a class="input-group-text bg-warning"><i class="bi bi-search"></i></a>
                                <input type="text" class="form-control" placeholder="Search here ...">
                            </div>
                        </div>
                </div>
                <div class="d-flex align-items-center justify-content-end">
                    <!-- <button class="bg-success fs-3"><a href="" class="text-white" style="text-decoration: none">Add user</a></button> -->
                    <a href="user_add.php" class="btn fs-3 text-white text-decoration-none" style="border-radius: 10px; background-color: #eb8153; margin-right:10px;">ADD USER</a>
                    <form action="delete_all.php" method="post">
                        <button class="btn fs-3 text-white" style="border-radius: 10px; background-color: #eb8153" type="submit" name="delete_all" onclick="return confirm('Bạn có chắc chắn muốn xóa tất cả dữ liệu không?')">Delete All</button>
                    </form>
                </div>
                <div class="main p-3 fs-5">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Full Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Password</th>
                                <th scope="col">Detail</th>
                                <th scope="col">Edit</th>
                                <th scope="col">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                foreach($user as $value){
                            ?>
                                    <tr>
                                        <td><?= $value['id'] ;?></td>
                                        <th scope="row" class="fw-normal"><?= $value['username']; ?></th>
                                        <td><?= $value['email'] ;?></td>
                                        <td><?= $value['password'] ;?></td>
                                        <td><a href=""><i class="bi bi-eye-fill"></i></a>
                                    </td>
                                    <td>
                                        <a href="user_edit.php?id=<?= $value['id']; ?>">
                                        <i class="bi bi-pencil"></i>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="user_delete.php?id=<?= $value[0]; ?>" onclick="return confirm('Bạn có chắc chắn muốn xoá?');">
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
    </div>
    <script src="../bootstrap_5/bootstrap-5.0.2-dist/js/bootstrap.js"></script>
</body>
</html>