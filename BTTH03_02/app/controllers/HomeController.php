<?php 

class HomeController{
    public function author(){
        require_once APP_ROOT.'/app/services/authorService.php';
        $authorService = new AuThorService();
        $authors  = $authorService ->getAllAuthor();

        include APP_ROOT.'/app/views/home/author.php';
    }
    public function index(){
        require_once APP_ROOT.'/app/services/bookService.php';
        $bookService = new BookService();
        $books  = $bookService ->getAllBook();

        include APP_ROOT.'/app/views/home/index.php';
    }
}
//chi ra view cua home nho routing dinh tuyen
?>