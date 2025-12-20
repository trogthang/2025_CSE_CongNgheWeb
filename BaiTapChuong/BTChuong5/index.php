<?php
// Controller

// TODO 6: import Model
require_once 'models/SinhVienModel.php';

// === KẾT NỐI PDO ===
$host = '127.0.0.1';
$dbname = 'cse485_web';
$username = 'root';
$password = '';

$dsn = "mysql:host=127.0.0.1;port=3307;dbname=cse485_web;charset=utf8mb4";

try {
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Kết nối thất bại: " . $e->getMessage());
}
// === KẾT THÚC PDO ===


// TODO 8: xử lý thêm sinh viên
if (isset($_POST['ten_sinh_vien'])) {

    // TODO 9
    $ten = $_POST['ten_sinh_vien'];
    $email = $_POST['email'];

    // TODO 10
    addSinhVien($pdo, $ten, $email);

    // TODO 11
    header('Location: index.php');
    exit;
}

// TODO 12: lấy danh sách sinh viên
$danh_sach_sv = getAllSinhVien($pdo);

// TODO 13: gọi View
include 'views/sinhvien_view.php';
?>
