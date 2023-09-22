<?php
    $sever = 'localhost';
    $user = 'root';
    $pass = '';
    $database = 'example';

    $conn = new mysqli($sever,$user,$pass,$database);

    if ($conn ->connect_error){
        die("ket noi that bai: ".$conn->connect_error);
    }

    $sql = "SELECT * FROM user";

    $result = $conn->query($sql);

    if ($result->num_rows > 0){
        $data = [];
        while ($row = $result->fetch_assoc()){
            $data[] = $row;
        }
    }
    $perPage = 10; // Số phần tử trên mỗi trang
    $totalRows = count($data); // Tổng số phần tử trong dữ liệu

    $totalPages = ceil($totalRows / $perPage); // Tổng số trang

    $currentPage = isset($_GET['page']) ? $_GET['page'] : 1; // Trang hiện tại, lấy từ tham số truyền vào URL

    $start = ($currentPage - 1) * $perPage; // Chỉ số bắt đầu của dữ liệu trên trang hiện tại
    $end = $start + $perPage; // Chỉ số kết thúc của dữ liệu trên trang hiện tại

    // Trích xuất dữ liệu trên trang hiện tại từ mảng $data
    $currentData = array_slice($data, $start, $perPage);
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
                    <a href="" class="btn fs-3 text-white text-decoration-none" style="border-radius: 10px; background-color: #eb8153">ADD USER</a>
                </div>
                <div class="main p-3 fs-5">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Full Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Gender</th>
                                <th scope="col">Country</th>
                                <th scope="col">Mobile</th>
                                <th scope="col">Date Of Birth</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                foreach($currentData as $value){
                            ?>
                                    <tr>
                                        <th scope="row" class="fw-normal"><?= $value['fullname']; ?></th>
                                        <td><?= $value['email'] ;?></td>
                                        <td><?= $value['gender'] ;?></td>
                                        <td><p class="rounded-2 text-center text-white" style="background-color:#eb8153; font-size: 15px; width: 70px"><?= $value['groups'] ;?></p></td>
                                        <td><?= $value['mobile'];?></td>
                                        <td><?= $value['date'];?></td>
                                        <td><i class="bi bi-dot h1 text-center text-secondary"></i></td>
                                        <td>
                                            <a href=""><i class="bi bi-shield-shaded"></i></a>
                                            <a href=""><i class="bi bi-pen-fill"></i></a> 
                                            <a href=""><i class="bi bi-trash3"></i></a>
                                        </td>
                                    </tr>
                            <?php
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-end">
                            <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                            </li>
                            <?php 
                                for ($page = 1; $page <= $totalPages; $page++) {
                                    echo '<a class="page-link" href="?page=' . $page . '">' . $page . '</a> ';
                                }   
                            ?>
                            <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                            </li>
                        </ul>
                    </nav>
            </div>
        </div>
    </div>
    <script src="../bootstrap_5/bootstrap-5.0.2-dist/js/bootstrap.js"></script>
</body>
</html>