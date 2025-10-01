<!-- sửa sản phẩm giao diện  -->

<?php include_once "../_header.php";

//nhan id tu URL
$id=$_GET["id"]??"";
if(empty($id))
{
    redirect_to("/admin/books");
}

//tao sql select du lieu theo id
$sql="SELECT *
      From books
      Where id=?";

//thuc thi cau lenh select
$data=db_select($sql,[$id]);

//lay dong du lieu dau tien
$data=$data[0];


?>

<form action="update.php" method="post">
    
    <input values="<?=$id?>" type="hidden" name="id">
    <label for="title ">title</label>

    <input type="text" name="title"  value="<?=$data["title"]?>" />
<!--  -->

    <input value="<?=$id?>" type="hidden" name="id">
    <label for="author_id">author_id</label>

    <input type="text" name="author_id" value="<?=$data["author_id"]?>" />
<!--  -->
    
    <input values="<?=$id?>" type="hidden" name="id">
    <label for="category_id">category_id</label>
    
    <input type="text" name="category_id" value="<?=$data["category_id"]?>"/>  
<!--  -->

    <input value=<?=$id?> type="hidden" name="id">
    <label for="publish_year">publish_year</label>

    <input type="text" name="publish_year" value="<?=$data["publish_year"]?>"/>  
<!--  -->
    <input value="<?=$id?>" type="hidden" name="id">
    <label for="quantity">quantity</label>

    <input type="text" name="quantity" value="<?=$data["quantity"]?>"/>  


    <button>Thêm sach</button>


</form>

<?php include_once "../_footer.php" ?>
