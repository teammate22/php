<?php
$rulers = [
    'XVI' => 'Иван Васильевич',
    'XVIII' => 'Пётр Алексеевич',
    'XIX' => 'Николай Павлович',
];

if (isset($_GET['century'])) {
    $century = strtoupper($_GET['century']);

    if (array_key_exists($century, $rulers)) {
        $ruler = $rulers[$century];
        echo "В $century веке царствовал $ruler.";
    } else {
        echo "Информация о правителе для века $century отсутствует.";
    }
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Правители веков</title>
</head>
<body>
    <h1>Введите век римскими цифрами</h1>
    <form method="GET">
        <input type="text" name="century" placeholder="XVI, XVIII или XIX">
        <input type="submit" value="Узнать">
    </form>
</body>
</html>