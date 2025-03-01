<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <title>Результат get_headers</title>
</head>
<body>
    <header>
        <img src="logo.png" alt="Логотип МосПолитеха">
        <h1>Результат get_headers</h1>
    </header>

    <main>
        <h2>Результат работы функции get_headers:</h2>
        <textarea readonly>
            <?php
            $url = "https://httpbin.org/post";
            $headers = get_headers($url);
            foreach ($headers as $header) {
                echo htmlspecialchars($header) . "\n";
            }
            ?>
        </textarea>
    </main>

    <footer>
        Задание для самостоятельной работы
    </footer>
</body>
</html>