<?php
$files = ['1.txt', '2.txt', '3.txt'];

$combinedContent = '';

foreach ($files as $file) {
    if (file_exists($file)) {
        $combinedContent .= file_get_contents($file);
    } else {
        echo "Файл $file не найден.<br>";
    }
}

file_put_contents('new.txt', $combinedContent);

echo "Содержимое файлов успешно объединено и записано в new.txt.";
?>