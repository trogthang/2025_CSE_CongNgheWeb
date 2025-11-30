<?php include 'data.php'; ?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Quản trị hoa</title>
    <style>
        table {
            width: 100%; border-collapse: collapse; margin-top: 20px;
        }
        th, td {
            border: 1px solid #ccc; padding: 10px; text-align: left;
        }
        th { background-color: #f2f2f2; }
        img { width: 80px; height: 60px; object-fit: cover; }
    </style>
</head>
<body>

<h1>🔧 Quản trị danh sách hoa</h1>

<table>
    <tr>
        <th>Ảnh</th>
        <th>Tên hoa</th>
        <th>Mô tả</th>
        <th>Hành động</th>
    </tr>

    <?php foreach ($flowers as $flower): ?>
        <tr>
            <td><img src="<?= $flower['image'] ?>"></td>
            <td><?= $flower['name'] ?></td>
            <td><?= $flower['description'] ?></td>
            <td>
                <button>Sửa</button>
                <button>Xóa</button>
            </td>
        </tr>
    <?php endforeach; ?>
</table>

</body>
</html>
