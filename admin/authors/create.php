<!-- thêm sản phẩm giao diện  -->

<?php include_once "../_header.php" ?>

<form action="insert.php" method="post">
    <label for="name">name</label>
    <input type="text" name="name" >
    <br>

    <label for="biography">biography</label>
    <input type="text" name="biography"/>  
    <br>

    <button>Thêm tác giả </button>

</form>

<?php include_once "../_footer.php" ?>