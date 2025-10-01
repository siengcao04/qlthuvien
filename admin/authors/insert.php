<!-- logic xử lý thêm danh mục sản phẩm -->

<?php 
include_once  "../../include/common.php" ;

//nhan du lieu tu form
$name = $_POST["name"] ?? "";
$biography=$_POST["biography"] ?? "";


//tao cau truy van
$sql = "INSERT INTO authors(name,biography,created_at)
        values (?,?, now()) ";

//goi ham de thuc thi truy van
db_execute($sql,[$name,$biography]);


//quay ve trang danh muc
redirect_to("admin/authors");


