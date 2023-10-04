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
                <form class="mt-5" action="add_genre_process.php" method="post">
                    <span class="text-success fs-1">Thêm Thể Loại</span>
                    <div class="mb-3">
                        <label class="form-label">Tên Thể Loại</label>
                        <input type="text" class="form-control" name="tenTheLoai">
                    </div>
                    <button type="submit" class="btn btn-primary mb-2" name="sbmSave">Thêm</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>