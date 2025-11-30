<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Đọc file CSV bằng PHP</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        th {
            background: #ddd;
        }
    </style>
</head>
<body>

<h2>Danh sách tài khoản (đọc từ CSV)</h2>

<?php
$filename = "accounts.csv";

// Kiểm tra file có tồn tại không
if (!file_exists($filename)) {
    echo "<p style='color:red;'>Không tìm thấy tệp $filename!</p>";
    exit;
}

echo "<table>";
$handle = fopen($filename, "r");

$headerPrinted = false;

while (($row = fgetcsv($handle, 1000, ",")) !== false) {

    // In tiêu đề bảng (header)
    if (!$headerPrinted) {
        echo "<tr>";
        foreach ($row as $col) {
            echo "<th>$col</th>";
        }
        echo "</tr>";
        $headerPrinted = true;
        continue;
    }

    // In dữ liệu từng dòng
    echo "<tr>";
    foreach ($row as $col) {
        echo "<td>$col</td>";
    }
    echo "</tr>";
}

fclose($handle);
echo "</table>";

?>

</body>
</html>
