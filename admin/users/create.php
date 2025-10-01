<!-- thêm sản phẩm giao diện  -->

<?php include_once "../_header.php" ?>

<form action="insert.php" method="post">
    <label for="username">username</label>
    <input type="text" name="username" >
    <br>

    <label for="password">password</label>
    <input type="password" name="password"/>    

    <button>Thêm tên tài khoản </button>

</form>

<?php include_once "../_footer.php" ?>