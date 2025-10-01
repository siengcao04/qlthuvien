<!-- sửa sản phẩm giao diện  -->

<?php include_once "../_header.php";

//nhan id tu URL
$id=$_GET["id"]??"";
if(empty($id))
{
    redirect_to("/admin/categories");
}

//tao sql select du lieu theo id
$sql="SELECT *
      From categories
      Where id=?";

//thuc thi cau lenh select
$data=db_select($sql,[$id]);

//lay dong du lieu dau tien
$data=$data[0];


?>

<form action="update.php" method="post">
    
    <input values="<?=$id?>" type="hidden" name="id">
    <label for="name ">name</label>

    <input type="text" name="name"  value="<?=$data["name"]?>" />


    <input value="<?=$id?>" type="hidden" name="id">
    <label for="description">description</label>

    <input type="text" name="description" value="<?=$data["description"]?>" />


    <button>Thêm thể loại</button>

</form>

<?php include_once "../_footer.php" ?>