<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style1.css">
    <title>Форма обратной связи</title>
</head>
<body>
    <header>
        <img src="logo.png" alt="Логотип МосПолитеха">
        <h1>Форма обратной связи</h1>
    </header>

    <main>
        <form action="https://httpbin.org/post" method="POST">
            <label for="name">Имя пользователя:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">E-mail пользователя:</label>
            <input type="email" id="email" name="email" required>

            <label for="type">Тип обращения:</label>
            <select id="type" name="type" required>
                <option value="жалоба">Жалоба</option>
                <option value="предложение">Предложение</option>
                <option value="благодарность">Благодарность</option>
            </select>

            <label for="message">Текст обращения:</label>
            <textarea id="message" name="message" rows="5" required></textarea>

            <label>Вариант ответа:</label>
            <label><input type="checkbox" name="response[]" value="SMS"> SMS</label>
            <label><input type="checkbox" name="response[]" value="E-mail"> E-mail</label>

            <button type="submit">Отправить</button>
        </form>

        <a href="headers.php">Перейти на вторую страницу</a>
    </main>

    <footer>
        Задание для самостоятельной работы
    </footer>
</body>
</html>