<!-- thêm sản phẩm giao diện  -->

<?php include_once "../_header.php" ?>

<form action="insert.php" method="post">
    <label for="title">title</label>
    <input type="text" name="title" >
    <br>

    <label for="author_id">author_id</label>
    <input type="text" name="author_id"/>  
    <br>

    <label for="category_id">category_id</label>
    <input type="text" name="category_id"/>  
    <br>

    <label for="publish_year">publish_year</label>
    <input type="text" name="publish_year"/>  
    <br>

    <label for="quantity">quantity</label>
    <input type="text" name="quantity"/>  
    <br>

    <button>Thêm sách </button>

</form>

<?php include_once "../_footer.php" ?>