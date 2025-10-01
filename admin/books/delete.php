
<?php 
include_once "../../include/common.php";

//nhan id tu URL
$id=$_GET["id"] ?? "";

//tao cau query
$sql="DELETE FROM books  WHERE id= ? "; 

//thuc thi cau lenh query
db_execute($sql,[$id]);

//quay lai trang danh sach danh muc
redirect_to("admin/books");