<?php
include_once "include/common.php";

// Lấy dữ liệu sách
$sql = "SELECT 
        b.id,
        b.title,
        b.publish_year,
        b.quantity,
        b.created_at,
        a.name AS author_name,
        c.name AS category_name
    FROM books b
    LEFT JOIN authors a ON a.id = b.author_id
    LEFT JOIN categories c ON c.id = b.category_id
    ORDER BY b.id DESC";

$data = db_select($sql);
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= asset("css/style.css") ?>">
    <title>Trang chủ</title>

</head>
<body>
    <nav>
        <ul>
            <li><a href="/qlthuvien/">Sách</a></li>
            <li><a href="/qlthuvien/borrows.php">Mượn sách</a></li>
        </ul>
    </nav>

    <main>
        <h1 class="center">Danh sách sách</h1>

        <div class="row">
            <?php foreach($data as $book) : ?>
            <div class="col">
                <div class="p-img">
                    <img src="<?= upload($book["id"]) ?>" alt="Bìa sách">
                </div>
                <div class="p-detail">
                    <h3><?= $book["title"] ?></h3>
                    <p>Tác giả: <?= $book["author_name"] ?></p>
                    <p>Danh mục: <?= $book["category_name"] ?></p>
                    <p>Năm xuất bản: <?= $book["publish_year"] ?></p>
                    <p>Số lượng: <?= $book["quantity"] ?></p>
                </div>
                <div class="p-action">
                    <button>Thêm vào mượn sách</button>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </main>
</body>
</html>
