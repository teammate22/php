<?php

// NUMBER 1 (Дана строка вида 'a1b2c3'. Напишите регулярку, которая найдет все цифры и удвоит их количество таким образом: 'a11b22c33')
echo 'NUMBER 1:';
echo '<BR>'.preg_replace('/(\d)/', '$1$1', 'a1b2c3');

// NUMBER 2 (С помощью preg_match определите, что переданная строка является доменом вида http://site.ru. 
// Протокол может быть как http, так и https.)
echo '<BR>'.'NUMBER 2:';
echo '<BR>'.preg_match('/^https?:\/\/[a-zA-Z0-9-]+\.[a-zA-Z]{2,}$/', "https://site.ru");
echo '<BR>'.preg_match('/^https?:\/\/[a-zA-Z0-9-]+\.[a-zA-Z]{2,}$/', "http://site.ru");
echo '<BR>'.preg_match('/^https?:\/\/[a-zA-Z0-9-]+\.[a-zA-Z]{2,}$/', "htp:/site.r");

// NUMBER 11 (Дана строка 'aaa@bbb eee7@kkk'. Напишите регулярку, которая найдет строки по шаблону: 
// любое количество букв и цифр, символ @, любое количество букв и цифр и поменяет местами то, что 
// стоит до @ на то, что стоит после нее. Например, aaa@bbb должно превратиться в bbb@aaa.)
echo '<BR>'.'NUMBER 3:';
echo '<BR>'.preg_replace('/([a-zA-Z0-9]+)@([a-zA-Z0-9]+)/', '$2@$1', 'aaa@bbb eee7@kkk');

// NUMBER 31 (С помощью preg_replace преобразуйте дату в формате '31-12-2014' в '2014.12.31'.)
echo '<BR>'.'NUMBER 4:';
echo '<BR>'.preg_replace('/^(\d{2})-(\d{2})-(\d{4})$/', '$3.$2.$1', '31-12-2014');

// NUMBER 32 (Дана строка с буквами, пробелами и цифрами. Найдите сумму всех чисел из данной строки.)
echo '<BR>'.'NUMBER 5:';
preg_match_all('/\d+/', "iuinrheh 345 herfgyu 2 wqerf", $matches); 
echo '<BR>'.array_sum($matches[0]); 

// NUMBER 34 (С помощью preg_match определите, что переданная строка заканчивается расширением txt, html или php.)
echo '<BR>'.'NUMBER 6:';
echo '<BR>'.preg_match('/\.(txt|html|php)$/i', 'lab4.php');
echo '<BR>'.preg_match('/\.(txt|html|php)$/i', 'lab4.txt');
echo '<BR>'.preg_match('/\.(txt|html|php)$/i', 'lab4.html');
echo '<BR>'.preg_match('/\.(txt|html|php)$/i', 'lab4.htm');

?>