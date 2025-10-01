<!-- thêm sản phẩm giao diện  -->

<?php include_once "../_header.php" ?>

<form action="insert.php" method="post">
    <label for="name">name</label>
    <input type="text" name="name" >
    <br>

    <label for="email">email</label>
    <input type="text" name="email"/>  
    <br>
    
    <label for="phone">phone</label>
    <input type="text" name="phone">
    <br>

    <label for="address">address</label>
    <input type="text" name="address">

    <button>Thêm tên độc giả </button>

</form>

<?php include_once "../_footer.php" ?>