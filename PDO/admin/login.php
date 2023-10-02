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
            background-image: url("../img/hero-bg.png");
            height: 700px;
        }
        .mb-4 ::placeholder{
            color: white;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 border mt-5 mb-5">
                <form class="m-4" action="process_login.php" method="post">
                    <div class="mb-3 text-center text-white">
                        <span class="fs-3">Đăng nhập<a href="" class="text-decoration-none">    TEK4.VN</a></span>
                        <p class="mt-4">HỌC TẬP - LUYỆN TẬP - CHIA SẺ - KẾT NỐI - MỞ RA CƠ HỘI <br>NGHỀ NGHIỆP VÀ HƠN THẾ NỮA</p>
                    </div>
                    <div class="mb-4 mt-4">
                        <input name="user" type="email" class="form-control bg-black" id="email" placeholder="Nhập email">
                    </div>
                    <div class="mb-4">
                        <input name="pass" type="password" class="form-control bg-black" id="password" placeholder="Nhập mật khẩu">
                    </div>
                    <div class="mb-4">
                        <a href="" class="text-decoration-none d-flex justify-content-end">Quên mật khẩu</a>
                    </div>
                    <div class="text-center mb-3">
                        <button type="submit" class="btn btn-primary" name="sbmLogin">Đăng nhập</button>
                    </div>
                    <div class="mb-4 text-center text-white">
                        <span>Bạn chưa có tài khoản? <a href="dangky.php" class="text-decoration-none">Đăng ký</a></span>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>