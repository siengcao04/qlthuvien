<?php include_once __DIR__ . "//../include/common.php";

//kiem tra dang nhap
session_start();

//chua dang nhap thi chuyen ve trang dang nhap
// if(empty($_SESSION["ten_dang_nhap"]))
// {
//     redirect_to("pages/login.php");
// }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?=asset('css/admin.css')?> ">
</head>
<body>
  
        <nav>Menu</nav>
        <ul>
            <li><a href="/qlthuvien/admin/books">Quản lý sách</a></li>
            <li><a href="/qlthuvien/admin/readers">Quản lý độc giả</a></li>
            <li><a href="/qlthuvien/admin/authors">Quản lý tác giả</a></li>
            <li><a href="/qlthuvien/admin/categories">Quản lý thể loại</a></li>
            <li><a href="/qlthuvien/admin/borrows">Phiếu mượn</a></li>
            <li><a href="/qlthuvien/admin/users">Admin</a></li>
            <li><a href="/qlthuvien/admin/thongke.php">Thống kê</a></li>




        </ul>
    

    
    