<?php
include_once "../include/common.php";

// Bắt đầu session
session_start();

if (is_post_method()) {
    $username = $_POST["username"] ?? "";
    $password = $_POST["password"] ?? "";

    $sql = "SELECT username, password FROM users WHERE username = ?";
    $data = db_select($sql, [$username]);

    if (count($data) > 0) {
        $data = $data[0];
        $hash = $data["password"];

        if (password_verify($password, $hash) === true) {
            // Đăng nhập thành công
            $_SESSION["username"] = $data["username"];
            redirect_to("admin/");
        } else {
            js_alert("Tên đăng nhập hoặc mật khẩu không đúng!");
        }
    } else {
        js_alert("Tên đăng nhập hoặc mật khẩu không đúng!");
    }
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập - Quản lý Thư viện</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }
        body {
            background: #f2f6fc;
        }
        .login-box {
            width: 400px;
            margin: 100px auto;
            background: #ffffff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0,0,0,0.2);
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #2980b9;
        }
        label {
            font-weight: bold;
        }
        input {
            width: 100%;
            padding: 10px;
            margin-top: 6px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            width: 100%;
            padding: 10px;
            background: #3498db;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
        }
        button:hover {
            background: #2980b9;
        }
        .footer {
            text-align: center;
            margin-top: 15px;
            color: #888;
            font-size: 13px;
        }
    </style>
</head>
<body>
    <div class="login-box">
        <h2>Quản lý Thư viện</h2>
        <form method="POST">
            <div>
                <label for="username">Tên đăng nhập</label>
                <input type="text" name="username" required>
            </div>
            <div>
                <label for="password">Mật khẩu</label>
                <input type="password" name="password" required>
            </div>
            <div>
                <button type="submit">Đăng nhập</button>
            </div>
        </form>
    </div>
</body>
</html>
