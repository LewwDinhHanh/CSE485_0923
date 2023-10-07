<?php 
require_once APP_ROOT.'/app/services/BookService.php';
class BookController{
    public function index(){
        
        $Books  = BookService::getAllBook();

        include APP_ROOT.'/app/views/home/index.php';
    }

    public function create(){
        include APP_ROOT . "/app/views/Books/add.php";
    }



    public function store()
    {
        if(isset($_POST['bookname']) && isset($_POST['year']) && isset($_POST['idauthor'])) {
            $tenSach = $_POST['bookname'];
            $namxuatban = $_POST['year'];
            $idTacGia = $_POST['idauthor'];
            BookService::create($tenSach, $namxuatban, $idTacGia);
            header('Location:' . DOMAIN . "/public/index.php");
        }

    }
    public function delete()
    {
        if(isset($_GET['id'])) {
            $id = $_GET['id'];
            BookService::delete($id);
            header('Location:' . DOMAIN . "/public/index.php");
        }
    }
    public function edit(){
        $id = $_GET['id'];
        $book = BookService::findById($id);
        include APP_ROOT . "/app/views/Books/Edit.php";
    }

    public function update()
    {
        if(isset($_POST['sbmSave'])) {
            $id = $_POST['id'];
            $tenSach = $_POST['bookname'];
            $namxuatban = $_POST['year'];
            $idTacGia = $_POST['idauthor'];
            BookService::edit($id,$tenSach, $namxuatban, $idTacGia);
            header('Location:' . DOMAIN . "/public/index.php");
        }
        else {
            echo "thieu du lieu";
        }
    }

}
//chi ra view cua home nho routing dinh tuyen
?>