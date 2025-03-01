<?php
function transformWords(&$words) {
    foreach ($words as $key => &$word) {
        if ($key % 2 == 1) {
            $word = strtoupper($word);
        }
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $text = $_POST['text'];

    $words = explode(' ', $text);

    transformWords($words);

    $transformedText = implode(' ', $words);
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Преобразование текста</title>
</head>
<body>
    <h1>Введите текст</h1>
    <form method="POST">
        <textarea name="text" rows="5" cols="50"></textarea><br><br>
        <input type="submit" value="Преобразовать">
    </form>

    <?php if (isset($transformedText)): ?>
        <h2>Результат:</h2>
        <p><?php echo htmlspecialchars($transformedText); ?></p>
    <?php endif; ?>
</body>
</html>