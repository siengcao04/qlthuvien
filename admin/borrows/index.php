<?php
include_once "../_header.php";

$sql = "SELECT b.id, r.name as reader_id , bo.title as book_id,
               b.borrow_date, b.return_date, b.status
        FROM borrows b
        LEFT JOIN readers r ON b.reader_id = r.id
        LEFT JOIN books bo ON b.book_id = bo.id
        ORDER BY b.id DESC";
$data = db_select($sql);
?>

<a href="create.php"  style="text-decoration:none; color: white; font-size:15px; background-color: #5cc4e7;
                   border:1px solid #333; border-radius: 4px; ">Thêm phiếu mượn</a>
   <table>
   <thead>
        <tr>
            <th>id</th>
            <th>id người đọc</th>
            <th>id sách</th>
            <th>Ngày mượn</th>
            <th>Ngày trả</th>
            <th>Trạng thái</th>
            <th>Thao tác</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($data as $i): ?>
            <tr>
                <td><?= $i["id"] ?></td>
                <td><?= $i["reader_id"] ?></td>
                <td><?= $i["book_id"] ?></td>
                <td><?= $i["borrow_date"] ?></td>
                <td><?= $i["return_date"] ?></td>
                <td><?=htmlspecialchars($i["status"] )?></td>
                <td>
                    <a href="edit.php?id=<?=$i["id"]?> " style="text-decoration: none; color: red;   font-size: 15px; " >Sửa</a>
                    <a href="delete.php?id=<?=$i["id"]?> " style="text-decoration: none; color: red;   font-size: 15px; " >xóa</a>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>

<?php include_once "../_footer.php"; ?>
