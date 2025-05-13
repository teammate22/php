<?php
session_start();

// 1
if (!isset($_SESSION['test'])) {
  $_SESSION['test'] = 'test';
} else {
  echo $_SESSION['test'];
  unset($_SESSION['test']);
}

// 2
$_SESSION['message'] = 'Привет с основной страницы!';

// 3
if (!isset($_SESSION['counter'])) {
  $_SESSION['test'] = 0;
  echo 'Страница еще не обновлялась';
} else {
  $_SESSION['counter'] += 1;
  echo "<br>".$_SESSION['counter'];
}

// 4
if (!isset($_SESSION['visit_time'])) {
  $_SESSION['visit_time'] = time();
  echo '<br>Вы зашли на сайт только что.';
} else {
  $time_elapsed = time() - $_SESSION['visit_time'];
  echo "<br>Вы зашли на сайт $time_elapsed секунд назад.<br>";
}

// 5
if (!isset($_COOKIE['test'])) {
setcookie('test', '123');
} else {
  echo $_COOKIE['test'];
  setcookie('test', '', time());
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <a href="/php/lessons/lab 6/index2.php">page 2</a>
</body>
</html>