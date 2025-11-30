<?php include 'data.php'; ?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Danh sách các loài hoa</title>
    <style>
        body { font-family: Arial; padding: 20px; }
        .grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }
        .item {
            border: 1px solid #ddd;
            padding: 10px;
            border-radius: 8px;
            text-align: center;
        }
        img {
            width: 100%;
            height: 180px;
            object-fit: cover;
            border-radius: 6px;
        }
        h3 { margin: 10px 0 5px; }
    </style>
</head>
<body>

<h1>🌸 Danh sách các loài hoa</h1>

<div class="grid">
    <?php foreach ($flowers as $flower): ?>
        <div class="item">
            <img src="<?= $flower['image'] ?>" alt="<?= $flower['name'] ?>">
            <h3><?= $flower['name'] ?></h3>
            <p><?= $flower['description'] ?></p>
        </div>
    <?php endforeach; ?>
</div>

</body>
</html>
