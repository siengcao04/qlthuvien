

<?php 
include_once "../../include/common.php";

//nhan id tu URL
$id=$_POST["id"] ?? "";
$username=$_POST["username"] ?? "";
$password=$_POST["password"] ?? "";
$created_at=$_POST["created_at"] ?? "";
if(empty($password))
{
    $sql="UPDATE users
        set username=?,
            where id=?";
}
else{
    //tao cau query
    $hash=password_hash($password,PASSWORD_DEFAULT);
    $sql="UPDATE users
            set username=?,
                password=? 
             where id=? ";
    //thuc thi cau lenh query
    db_execute($sql,[$username,$hash,$id]);
}

//quay lai trang danh sach danh muc
redirect_to("admin/users");