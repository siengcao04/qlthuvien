<!-- logic xử lý thêm danh mục sản phẩm -->

<?php 
include_once  "../../include/common.php" ;

//nhan du lieu tu form
$username = $_POST["username"] ?? "";
$password=$_POST["password"] ?? "";

// md5 hash mkhau   bcrypt generator bao mat hon md5

// $hashed = md5($mat_khau);

$hashed = password_hash($password, PASSWORD_DEFAULT);

//tao cau truy van
$sql = "INSERT INTO users(username,password,created_at)
        values (?,?, now()) ";

//goi ham de thuc thi truy van
db_execute($sql,[$username,$password] ,);


//quay ve trang danh muc
redirect_to("admin/users");


