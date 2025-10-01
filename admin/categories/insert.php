<!-- logic xử lý thêm danh mục sản phẩm -->

<?php 
include_once  "../../include/common.php" ;

//nhan du lieu tu form
$name = $_POST["name"] ?? "";
$description=$_POST["description"] ?? "";


//tao cau truy van
$sql = "INSERT INTO categories(name,description)
        values (?,?) ";

//goi ham de thuc thi truy van
db_execute($sql,[$name,$description]);


//quay ve trang danh muc
redirect_to("admin/categories");


