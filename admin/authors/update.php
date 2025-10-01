
<?php 
include_once "../../include/common.php";

//nhan id tu URL
$id=$_POST["id"] ?? "";
$name=$_POST["name"] ?? "";
$biography=$_POST["biography"] ?? "";
$created_at=$_POST["created_at"] ?? "";
if(empty($id))
{
    redirect_to("admin/authors");
}
else{
    //tao cau query
    // $hash=password_hash($password,PASSWORD_DEFAULT);
    $sql="UPDATE authors
            set name=?,
                biography=?,
             where id=? ";
    //thuc thi cau lenh query
    db_execute($sql,[$name,$biography,$id]);
}

//quay lai trang danh sach danh muc
redirect_to("admin/authors");

