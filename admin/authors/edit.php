<!-- sửa sản phẩm giao diện  -->

<?php include_once "../_header.php";

//nhan id tu URL
$id=$_GET["id"]??"";
if(empty($id))
{
    redirect_to("/admin/authors");
}

//tao sql select du lieu theo id
$sql="SELECT *
      From authors
      Where id=?";

//thuc thi cau lenh select
$data=db_select($sql,[$id]);

//lay dong du lieu dau tien
$data=$data[0];


?>

<form action="insert.php" method="post">
    
    <input values="<?=$id?>" type="hidden" name="id">
    <label for="name ">name</label>

    <input type="text" name="name"  value="<?=$data["name"]?>" />


    <input value="<?=$id?>" type="hidden" name="id">
    <label for="biography">biography</label>

    <input type="text" name="biography" value="<?=$data["biography"]?>" />


    <button>Thêm tác giả</button>

</form>

<?php include_once "../_footer.php" ?>