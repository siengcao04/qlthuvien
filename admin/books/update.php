
<?php 
include_once "../../include/common.php";

//nhan id tu URL
$id=$_POST["id"] ?? "";
$title=$_POST["title"] ?? "";
$author_id=$_POST["author_id"] ?? "";
$category_id=$_POST["category_id"] ?? "";
$publish_year=$_POST["publish_year"] ?? "";
$quantity=$_POST["quantity"] ?? "";


if(empty($id))
{
    redirect_to("admin/books");
}
else{
    //tao cau query
    // $hash=password_hash($password,PASSWORD_DEFAULT);
    $sql="UPDATE books
            set title=?,
                author_id=?,
                category_id=?,
                publish_year=?,
                quantity=?
             where id=? ";
    //thuc thi cau lenh query
    db_execute($sql,[$title,$author_id,$category_id,$publish_year,$quantity,$id]);
}

//quay lai trang danh sach danh muc
redirect_to("admin/books");

