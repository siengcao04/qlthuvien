
<?php 
include_once "../../include/common.php";

//nhan id tu URL
$id=$_POST["id"] ?? "";
$reader_id=$_POST["reader_id"] ?? "";
$book_id=$_POST["book_id"] ?? "";
$borrow_date=$_POST["borrow_date"] ?? "";
$return_date=$_POST["return_date"] ?? "";
$status=$_POST["status"] ?? "";


if(empty($id))
{
    redirect_to("admin/borrows");
}
else{
    //tao cau query
    // $hash=password_hash($password,PASSWORD_DEFAULT);
    $sql="UPDATE borrows
            set reader_id=?,
                book_id=?,
                borrow_date=?,
                return_date=?,
                status=?
             where id=? ";
    //thuc thi cau lenh query
    db_execute($sql,[$reader_id,$book_id,$borrow_date,$return_date,$status,$id]);
}

//quay lai trang danh sach danh muc
redirect_to("admin/borrows");

