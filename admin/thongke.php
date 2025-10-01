<?php 
    include_once "../include/common.php";   // để dùng db_select()
    include_once "_header.php";  
?>

<h1 style=" text-align: center ;justify-content: center;">Thống kê - Báo cáo</h1>

<!-- Thống kê số lượng sách theo thể loại -->
<h3>Thống kê số lượng sách theo thể loại</h3>
<?php
    $sql1 = "SELECT c.name AS category_name, COUNT(b.id) AS total_books
            FROM books b
            LEFT JOIN categories c ON b.category_id = c.id
            GROUP BY c.id, c.name";
    $data1 = db_select($sql1);
?>
<table >
    <thead>
        <tr>
            <th>Thể loại</th>
            <th>Số lượng sách</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($data1 as $i): ?>
            <tr>
                <td><?= $i["category_name"] ?></td>
                <td><?= $i["total_books"] ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<br>

<!-- Thống kê số lượng sách theo tác giả -->
<h3>Thống kê số lượng sách theo tác giả</h3>
<?php
    $sql2 = "SELECT a.name AS author_name, COUNT(b.id) AS total_books
            FROM books b
            LEFT JOIN authors a ON b.author_id = a.id
            GROUP BY a.id, a.name";
    $data2 = db_select($sql2);
?>
<table >
    <thead>
        <tr>
            <th>Tác giả</th>
            <th>Số lượng sách</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($data2 as $i): ?>
            <tr>
                <td><?= $i["author_name"] ?></td>
                <td><?= $i["total_books"] ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<br>

<!-- Thống kê tình trạng mượn sách -->
<h3>Thống kê phiếu mượn (Đang mượn / Đã trả)</h3>
    <?php
    $sql3 = "SELECT status, COUNT(id) AS total_pm
            FROM borrows
            GROUP BY status";
    $data3 = db_select($sql3);

?>
<table >
    <thead>
        <tr>
            <th>Trạng thái</th>
            <th>Số lượng</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($data3 as $i): ?>
            <tr>
                <td><?= $i["status"] ?></td>
                <td><?= $i["total_pm"] ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<br>

<!-- Độc giả mượn nhiều nhất -->
<h3>Top độc giả mượn sách nhiều nhất</h3>
<?php
    $sql4 = "SELECT r.name AS reader_name, COUNT(b.id) AS total_pm
            FROM borrows b
            LEFT JOIN readers r ON b.reader_id = r.id
            GROUP BY r.id, r.name
            ORDER BY total_pm DESC
            LIMIT 5";
    $data4 = db_select($sql4);
?>
<table >
    <thead>
        <tr>
            <th>Độc giả</th>
            <th>Số phiếu mượn</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($data4 as $i): ?>
            <tr>
                <td><?= $i["reader_name"] ?></td>
                <td><?= $i["total_pm"] ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php include_once "_footer.php"; ?>
