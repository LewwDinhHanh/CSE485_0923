<?php 
if(isset($_GET['id'])){
    $id = $_GET['id'];
}

try{
    $conn = new PDO("mysql:host=localhost;dbname=quanlybaihat", "root","");

    $sql = "DELETE FROM theloai WHERE id = '$id'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    $rowCount = $stmt->rowCount();
    if($rowCount>0){
//      echo "Deleted $rowCount row(s).";
        header("Location: ../../../public/genre.php?success=$id");
    }
}catch(PDOException $e){
    echo $e->getMessage();
}
?>