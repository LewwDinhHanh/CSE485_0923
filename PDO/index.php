<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TEK4</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <style>
        .container{
            background-image: url("./img/hero-bg.png");
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md">
                <div class="header m-4 d-flex align-items-center justify-content-between">
                    <div class="d-flex">
                        <a href=""><img src="./img/logo.webp" alt="logo"></a>
                        <div class="input-group flex-nowrap">
                            <span class="input-group-text" id="addon-wrapping"><i class="bi bi-search"></i></span>
                            <input type="text" class="form-control" placeholder="Tìm kiếm trên TEK4.VN" aria-label="Username" aria-describedby="addon-wrapping">
                        </div>
                    </div>
                    <div class="d-flex">
                        <a href="./admin/login.php" class="text-white text-decoration-none">Đăng nhập</a>
                        <span class="text-white">/</span>
                        <a href="./admin/dangky.php" class="text-white text-decoration-none">Đăng ký</a>
                    </div>
                </div>
                <div class="main">
                    <img class="img-fluid" src="./img/nen.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <script href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>