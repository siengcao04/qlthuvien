<!-- thêm sản phẩm giao diện  -->

<?php include_once "../_header.php" ?>

<form action="insert.php" method="post">
    <label for="name">name</label>
    <input type="text" name="name" >
    <br>

    <label for="description">description</label>
    <input type="text" name="description"/>  
    <br>

    <button>Thêm thể loại </button>

</form>

<?php include_once "../_footer.php" ?>