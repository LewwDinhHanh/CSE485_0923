<?php
$perPage = 10; // Số dòng trên mỗi trang
$totalRows = 100; // Tổng số dòng dữ liệu

$totalPages = ceil($totalRows / $perPage); // Tổng số trang

$currentPage = isset($_GET['page']) ? $_GET['page'] : 1; // Trang hiện tại

$start = ($currentPage - 1) * $perPage; // Chỉ số bắt đầu của dữ liệu trên trang hiện tại
$end = $start + $perPage; // Chỉ số kết thúc của dữ liệu trên trang hiện tại

// Trích xuất dữ liệu trên trang hiện tại từ nguồn dữ liệu của bạn (cơ sở dữ liệu, mảng, v.v.)
$data = range(1, 100); // Ví dụ: Mảng dữ liệu từ 1 đến 100

$currentData = array_slice($data, $start, $end - $start);

// Hiển thị dữ liệu trên trang hiện tại
foreach ($currentData as $row) {
    echo $row . "<br>";
}

// Liên kết phân trang
for ($page = 1; $page <= $totalPages; $page++) {
    $activeClass = ($page == $currentPage) ? "active" : "";
    echo '<a href="?page=' . $page . '" class="' . $activeClass . '">' . $page . '</a> ';
}
?>