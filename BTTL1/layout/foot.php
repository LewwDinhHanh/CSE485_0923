<?php
    $fullname = ['Nam','Hanh','Linh','Hoa','Son','Duc','Dong'];
    $email = ['manager@example.com','customer@example.com','admin@example.com','test.gmail.com','son2607@gmail.com','ducbeo123@gmail.com','dong36@gmail.com'];
    $gender = ['Male','Male','Male','','','',''];
    $group = ['Manager','Customer','Admin','Customer','Customer','Customer','Customer'];
    $mobile = ['9652588652','9836273472','9274723544','','','',''];
    $date = ['2000-08-24','2003-09-09','2002-08-24','none','none','none','none'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap 5</title>
    <link rel="stylesheet" href="../bootstrap_5/bootstrap-5.0.2-dist/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="">
    <style>
        /* Tùy chỉnh màu khi hover */
        .page-link:hover {
            color: white; /* Màu sẽ thay đổi khi hover vào */
            background-color: orangered;
        }
    </style>
</head>
<body>
    <div class="container-fluid"> <!-- fluid: full màn hình -->
        <div class="row"> <!-- row: chia hàng -->
            <div class="col-3 p-3">    <!-- bg: background; col: chia cột -->
                <img src="../bootstrap_5/img/logo2.png" class="pb-4 pt-2" alt="logo" style="width: 200px;">
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