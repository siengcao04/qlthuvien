<!-- logic xử lý thêm danh mục sản phẩm -->

<?php 
include_once  "../../include/common.php" ;

//nhan du lieu tu form
$name = $_POST["name"] ?? "";
$email=$_POST["email"] ?? "";
$phone=$_POST["phone"] ?? "";
$address=$_POST["address"] ?? "";

//tao cau truy van
$sql = "INSERT INTO readers(name,email,phone,address,created_at)
        values (?,?,?,?, now()) ";

//goi ham de thuc thi truy van
db_execute($sql,[$name,$email,$phone,$address]);


//quay ve trang danh muc
redirect_to("admin/readers");


