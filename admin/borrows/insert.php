<?php
include_once "../../include/common.php";

//nhan du lieu tu form
$reader_id = $_POST["reader_id"] ?? "";
$book_id = $_POST["book_id"] ?? "";
$borrow_date = $_POST["borrow_date"] ?? "";
$return_date = $_POST["return_date"] ?? "";
$status = $_POST["status"] ?? "";

////tao cau truy van
$sql = "INSERT INTO borrows (reader_id,book_id,borrow_date,return_date,status)
        VALUES (?, ?, ?, ?, ?)";

//goi ham de thuc thi truy van
db_execute($sql, [$reader_id,$book_id,$borrow_date,$return_date,$status]);



//quay ve trang sach
redirect_to("admin/borrows");


