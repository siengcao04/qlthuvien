<?php
include_once "../_header.php";

$sql = "SELECT * FROM users";
$data = db_select($sql);
// dd($data);

?>

<a href="create.php"  style="text-decoration:none; color: white; font-size:15px; background-color: #5cc4e7;
                   border:1px solid #333; border-radius: 4px; ">Thêm tên tài khoản</a>


<table>
    <thead>
        <tr>
            <th>id</th>
            <th>username</th>
            <th>created_at </th>
            <th>thao tác</th>

        </tr>
        
    </thead>
    <tbody>
        <?php foreach ($data as $i): ?>

           <tr>
             <td><?= $i["id"] ?></td>
            <td><?= $i["username"] ?></td>
            <td><?= $i["created_at"] ?></td>
            <td>
                <a href="edit.php?id=<?=$i["id"]?> " style="text-decoration: none; color: red;   font-size: 15px; " >Sửa</a>
                <a href="delete.php?id=<?=$i["id"]?> " style="text-decoration: none; color: red;   font-size: 15px; " >xóa</a>
            </td>

           </tr>
         

        <?php endforeach ?>
    </tbody>

</table>

<?php include_once "../_footer.php" ?>