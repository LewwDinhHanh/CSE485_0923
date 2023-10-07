<?php 
require_once APP_ROOT.'/app/services/AuthorService.php';
class AuthorController{
    public function index(){
        
        $Authors  = AuthorService::getAllAuthor();

        include APP_ROOT.'/app/views/home/Author.php';
    }

    public function create(){
        include APP_ROOT . "/app/views/Authors/Add.php";
    }

    public function store()
        {
            if(isset($_POST['name'])) {
                $tenTacGia = $_POST['name'];
                AuthorService::create($tenTacGia);
                header('Location:' . DOMAIN . "/public/Author.php");
            }
    
        }
        public function delete()
        {
            if(isset($_GET['id'])) {
                $id = $_GET['id'];
                AuthorService::delete($id);
                header('Location:' . DOMAIN . "/public/Author.php");
            }
        }
        public function edit(){
            $id = $_GET['id'];
            $author = AuthorService::findById($id);
            include APP_ROOT . "/app/views/Authors/Edit.php";
        }
    
        public function update()
        {
            if(isset($_POST['sbmSave'])) {
                $id = $_POST['id'];
                $tenTacGia = $_POST['name'];
                AuthorService::edit($id,$tenTacGia);
                header('Location:' . DOMAIN . "/public/Author.php");
            }
            else {
                echo "thieu du lieu";
            }
        }

}
//chi ra view cua home nho routing dinh tuyen
?>