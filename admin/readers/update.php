
<?php 
include_once "../../include/common.php";

//nhan id tu URL
$id=$_POST["id"] ?? "";
$name=$_POST["name"] ?? "";
$email=$_POST["email"] ?? "";
$phone=$_POST["phone"] ?? "";
$address=$_POST["address"] ?? "";
$created_at=$_POST["created_at"] ?? "";
if(empty($id))
{
    redirect_to("admin/readers");
}
else{
    //tao cau query
    // $hash=password_hash($password,PASSWORD_DEFAULT);
    $sql="UPDATE readers
            set name=?,
                email=?,
                phone=?,
                address=?
             where id=? ";
    //thuc thi cau lenh query
    db_execute($sql,[$name,$email,$phone,$address,$id]);
}

//quay lai trang danh sach danh muc
redirect_to("admin/readers");

