<?php
include_once "../_header.php";

$sql = "SELECT * FROM categories";
$data = db_select($sql);
// dd($data);

?>

<a href="create.php"  style="text-decoration:none; color: white; font-size:15px; background-color: #5cc4e7;
                   border:1px solid #333; border-radius: 4px; ">Thêm thể loại</a>


<table>
    <thead>
        <tr>
            <th>id</th>
            <th>Tên thể loại</th>
            <th>Mô tả</th>
            <th>thao tác</th>

        </tr>
        
    </thead>
    <tbody>
        <?php foreach ($data as $i): ?>

           <tr>
            <td><?= $i["id"] ?></td>
            <td><?= $i["name"] ?></td>
            <td><?= $i["description"] ?></td>
            <td>
                <a href="edit.php?id=<?=$i["id"]?> " style="text-decoration: none; color: red;   font-size: 15px; " >Sửa</a>
                <a href="delete.php?id=<?=$i["id"]?> " style="text-decoration: none; color: red;   font-size: 15px; " >xóa</a>
            </td>

           </tr>
         

        <?php endforeach ?>
    </tbody>

</table>

<?php include_once "../_footer.php" ?>