<?php

// Kết nối CSDL
$host = DB_HOST;
$port = DB_PORT;
$dbname = DB_NAME;

try {
    $conn = new PDO("mysql:host=$host;port=$port;dbname=$dbname", DB_USERNAME, DB_PASSWORD);
    // set the PDO error mode to exception
    // Cài đặt chế độ báo lỗi là Xử lý ngoại lệ
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //  Cài đặt chế độ trả dữ liệu
    $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    debug("Connection failed: " . $e->getMessage());
}
