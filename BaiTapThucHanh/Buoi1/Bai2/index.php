<?php
// Đọc file quiz
$lines = file("quiz.txt", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

$questions = [];
$current = [];

foreach ($lines as $line) {
    if (strpos($line, "ANSWER:") === 0) {
        $current['answer'] = trim(substr($line, 8)); // Lấy ký tự A/B/C/D
        $questions[] = $current;
        $current = [];
    } else {
        if (!isset($current['question'])) {
            $current['question'] = $line;
        } else {
            $current['options'][] = $line;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Quiz Trắc Nghiệm</title>

    <style>
        body { font-family: Arial; padding: 20px; }
        .question-box {
            background: #f7f7f7; padding: 15px; margin-bottom: 20px;
            border-radius: 8px; border: 1px solid #ddd;
        }
        .correct { color: green; font-weight: bold; }
        .wrong { color: red; font-weight: bold; }
    </style>

    <script>
        function checkAnswer(qIndex, chosenLetter, correctLetter) {
            let result = document.getElementById("result-" + qIndex);

            if (chosenLetter === correctLetter) {
                result.innerHTML = "<span class='correct'>✔ Đúng!</span>";
            } else {
                result.innerHTML = "<span class='wrong'>✘ Sai! Đáp án đúng là: " + correctLetter + "</span>";
            }
        }
    </script>
</head>
<body>

<h1>📘 Bài Thi Trắc Nghiệm</h1>

<?php foreach ($questions as $index => $q): ?>
    <div class="question-box">
        <h3>Câu <?= $index + 1 ?>: <?= $q['question'] ?></h3>

        <?php foreach ($q['options'] as $opt): 
            // "A. TextView" → ký tự đúng là "A"
            $letter = substr($opt, 0, 1);
        ?>
            <label>
                <input type="radio"
                       name="q<?= $index ?>"
                       onclick="checkAnswer(<?= $index ?>, '<?= $letter ?>', '<?= $q['answer'] ?>')">
                <?= $opt ?>
            </label><br>
        <?php endforeach; ?>

        <p id="result-<?= $index ?>"></p>
    </div>
<?php endforeach; ?>

</body>
</html>
