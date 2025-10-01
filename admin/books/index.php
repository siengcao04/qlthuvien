<?php
include_once "../_header.php";

$keyword = $_GET['keyword'] ?? "";

// Lấy danh sách tác giả và thể loại để hiển thị kèm
$sql = "SELECT b.*, a.name as author_name, c.name as category_name
        FROM books b
        LEFT JOIN authors a ON b.author_id = a.id
        LEFT JOIN categories c ON b.category_id = c.id
        WHERE b.title LIKE ?";
$data = db_select($sql, ['%' . $keyword . '%']);
?>


<form method="get" action="index.php">
    <input type="text" name="keyword" placeholder="Tìm tên sách..."
           value="<?= htmlspecialchars($keyword) ?>">
    <button type="submit">Tìm kiếm</button>
</form>
<a href="create.php"  style="text-decoration:none; color: white; font-size:15px; background-color: #5cc4e7;
                   border:1px solid #333; border-radius: 4px; ">Thêm sách mới</a>


<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Tên sách</th>
            <th>Tác giả</th>
            <th>Thể loại</th>
            <th>Năm XB</th>
            <th>Số lượng</th>
            <th>Ngày tạo</th>
            <th>Thao tác</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($data as $i): ?>
            <tr>
                <td><?= $i["id"] ?></td>
                <td><?= $i["title"] ?></td>
                <td><?= $i["author_name"] ?></td>
                <td><?= $i["category_name"] ?></td>
                <td><?= $i["publish_year"] ?></td>
                <td><?= $i["quantity"] ?></td>
                <td><?= $i["created_at"] ?></td>
                <td>
                    <a href="edit.php?id=<?=$i["id"]?> " style="text-decoration: none; color: red;   font-size: 15px; " >Sửa</a>
                    <a href="delete.php?id=<?=$i["id"]?> " style="text-decoration: none; color: red;   font-size: 15px; " >xóa</a>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>

<?php include_once "../_footer.php"; ?>
