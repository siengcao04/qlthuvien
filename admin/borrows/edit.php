<!-- sửa sản phẩm giao diện  -->

<?php include_once "../_header.php";

//nhan id tu URL
$id=$_GET["id"]??"";
if(empty($id))
{
    redirect_to("/admin/borrows");
}

//tao sql select du lieu theo id
$sql="SELECT *
      From borrows
      Where id=?";

//thuc thi cau lenh select
$data=db_select($sql,[$id]);

//lay dong du lieu dau tien
$data=$data[0];


?>

<form action="update.php" method="post">
    
    <input values="<?=$id?>" type="hidden" name="id">
    <label for="reader_id ">reader_id</label>

    <input type="text" name="reader_id"  value="<?=$data["reader_id"]?>" />
<!--  -->

    <input value="<?=$id?>" type="hidden" name="id">
    <label for="book_id">book_id</label>

    <input type="text" name="book_id" value="<?=$data["book_id"]?>" />
<!--  -->
    
    <input values="<?=$id?>" type="hidden" name="id">
    <label for="borrow_date">borrow_date</label>
    
    <input type="text" name="borrow_date" value="<?=$data["borrow_date"]?>"/>  
<!--  -->

    <input value=<?=$id?> type="hidden" name="id">
    <label for="return_date">return_date</label>

    <input type="text" name="return_date" value="<?=$data["return_date"]?>"/>  
<!--  -->
    <input value="<?=$id?>" type="hidden" name="id">
    <label for="status">status</label>

    <input type="text" name="status" value="<?=$data["status"]?>"/>  


    <button>Thêm phiếu mượn </button>


</form>

<?php include_once "../_footer.php" ?>
