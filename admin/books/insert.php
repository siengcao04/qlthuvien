<?php
include_once "../../include/common.php";

//nhan du lieu tu form
$title = $_POST["title"] ?? "";
$author_id = $_POST["author_id"] ?? "";
$category_id = $_POST["category_id"] ?? "";
$publish_year = $_POST["publish_year"] ?? "";
$quantity = $_POST["quantity"] ?? "";

////tao cau truy van
$sql = "INSERT INTO books (title, author_id, category_id, publish_year, quantity,created_at)
        VALUES (?, ?, ?, ?, ?, now())";

//goi ham de thuc thi truy van
db_execute($sql, [$title, $author_id, $category_id, $publish_year, $quantity]);



//quay ve trang sach
redirect_to("admin/books");


