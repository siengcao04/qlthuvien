<!-- thêm sản phẩm giao diện  -->

<?php include_once "../_header.php" ?>

<form action="insert.php" method="post">
    <label for="reader_id">reader_id</label>
    <input type="text" name="reader_id" >
    <br>

    <label for="book_id">book_id</label>
    <input type="text" name="book_id"/>  
    <br>

    <label for="borrow_date">borrow_date</label>
    <input type="date" name="borrow_date"/>  
    <br>

    <label for="return_date">return_date</label>
    <input type="date" name="return_date"/>  
    <br>

    <label for="status">status</label>
     <select name="status">
        <option value="Đang mượn">Đang mượn</option>
        <option value="Đã trả">Đã trả</option>
    </select>
    <br>


    <button>Thêm phiếu mượn </button>

</form>

<?php include_once "../_footer.php" ?>