<?php
    // $a; переменная
    // a(); функция
    // define("pi", 3,14); объявление константы
    // $R = 2;
    // $L = 2 * pi * $R;

    $a = 2;
    $b = "2";
    $c = $a + $b;
    echo  $c.'</br>'; // вывод
    echo  $c.'</br>';
    $c = (string)$a.$b.'</br>'; // приведение к типу данных
    echo $c;
    echo gettype($c).'</br>';
    // точка это конкатинация (соеденение)
    // интерполяция без точки
    echo "интерполяция $c";
    $s = 3.6;
    // округление
    echo 'floor '.floor($s).'</br>';
    echo 'ceil '.ceil($s).'</br>';
    echo 'round '.round($s).'</br>';

    // задание 1
    $a = 27; $b = 12;
    $c = $a**2 + $b**2;
    $c = $c**(1/2);
    echo 'задание 1'.'</br>'.round($c, 2).'</br>';

    // задание 8
    $a = true; $b = false;
    echo 'задание 8'.'</br>'.(int)$a.' '.(int)$b.'</br>';

    // задание 10
    $each = 'каждый'; $hunter = 'охотник'; $wants = 'желает'; $know = 'знать'; $where = 'где'; $sits = 'сидит'; $fizan = 'фазан';
    echo "задание 10 </br> $each $hunter $wants $know $where $sits $fizan </br>";

    // задание 22
    $a = 4; $b = 3; $c = ' мандаринок';
    echo 'задание 22 </br>'.$a * $b.' '.$c.'</br>';

    // задание 31
    $a = 2; $b = 2.0; $c = '2'; $d = 'two'; $g = true; $f = false;
    echo 'задание 31 </br>';
    echo 'int '.(int)$a.'</br>';
    echo 'float '.(int)$b.'</br>';
    echo 'string '.(int)$c.'</br>';
    echo 'string '.(int)$d.'</br>';
    echo 'bool '.(int)$g.'</br>';
    echo 'bool '.(int)$f.'</br>';
?>