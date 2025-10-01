
<?php 
include_once "../../include/common.php";

//nhan id tu URL
$id=$_POST["id"] ?? "";
$name=$_POST["name"] ?? "";
$description=$_POST["description"] ?? "";

if(empty($id))
{
    redirect_to("admin/categories");
}
else{
    //tao cau query
    // $hash=password_hash($password,PASSWORD_DEFAULT);
    $sql="UPDATE categories
            set name=?,
                description=?
             where id=? ";
    //thuc thi cau lenh query
    db_execute($sql,[$name,$description,$id]);
}

//quay lai trang danh sach danh muc
redirect_to("admin/categories");

