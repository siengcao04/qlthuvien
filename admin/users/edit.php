<!-- sửa sản phẩm giao diện  -->

<?php include_once "../_header.php";

//nhan id tu URL
$id=$_GET["id"]??"";
if(empty($id))
{
    redirect_to("/admin/users");
}

//tao sql select du lieu theo id
$sql="SELECT id,username,password,created_at
      From users
      Where id=?";

//thuc thi cau lenh select
$data=db_select($sql,[$id]);

//lay dong du lieu dau tien
$data=$data[0];


?>

<form action="insert.php" method="post">
    
    <input values="<?=$id?>" type="hidden" name="id">
    <label for="Tên tai khoan ">username</label>

    <input type="text" name="username"  value="<?=$data["username"]?>" />
    <button>Thêm tai khoan </button>

    <input value="<?=$id?>" type="hidden" name="id">
    <label for="password">password</label>

    <input type="text" name="password" value="<?=$data["password"]?>" />
    <button>Thêm mật khẩu</button>


</form>

<?php include_once "../_footer.php" ?>