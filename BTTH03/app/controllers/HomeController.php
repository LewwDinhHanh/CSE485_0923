<?php 

class HomeController{
    public function index(){
        require_once APP_ROOT.'/app/services/songService.php';
        $baihatService = new BaiHatService();
        $BaiHats  = $baihatService ->getAllBaiHat();

        include APP_ROOT.'/app/views/home/index.php';
    }
    public function theloai(){
        require_once APP_ROOT.'/app/services/genreService.php';
        $theloaiService = new TheLoaiService();
        $theloais  = $theloaiService ->getAllTheLoai();

        include APP_ROOT.'/app/views/home/genre.php';
    }
    public function delete()
    {
        if (isset($_POST['id'])) {
            $id = $_POST['id'];
            BaiHatService::delete($id);
            header('Location:' . DOMAIN . "/public/index.php");
        }
    }
}
//chi ra view cua home nho routing dinh tuyen
?>