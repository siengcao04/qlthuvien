<!-- sửa sản phẩm giao diện  -->

<?php include_once "../_header.php";

//nhan id tu URL
$id=$_GET["id"]??"";
if(empty($id))
{
    redirect_to("/admin/readers");
}

//tao sql select du lieu theo id
$sql="SELECT *
      From readers
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
    <!-- <button>Thêm tai khoan </button> -->

    <input value="<?=$id?>" type="hidden" name="id">
    <label for="email">email</label>

    <input type="text" name="email" value="<?=$data["email"]?>" />
    <!-- <button>Thêm mật khẩu</button> -->

    <input value="<?=$id?>" type="hidden" name="id">
    <label for="phone">phone</label>

    <input type="text" name="phone" value="<?=$data["phone"]?>" />

    <input value="<?=$id?>" type="hidden" name="id">
    <label for="address">address</label>

    <input type="text" name="address" value="<?=$data["address"]?>" />

    <button>Them</button>

    


</form>

<?php include_once "../_footer.php" ?>