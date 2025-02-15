<?php
    // function f($a, $b): int
    // {
    //   $c = $a + $b;
    //   return $c;
    // }

    // echo f(3,4);

    // ЗАДАНИЕ 1
    $arr1 = array('a', 'b', 'c', 'b', 'a');
    echo 'задание 1: </br>';
    print_r(array_count_values($arr1));
    echo '</br>';

    // ЗАДАНИЕ 6
    $arr2 = array('a', 'b', 'c', 'd', 'e');
    echo 'задание 6: </br>';
    $upperArr = array_map('strtoupper', $arr2);
    foreach($upperArr as $el){
      echo "$el, ";
    }
    echo '</br>';

    // ЗАДАНИЕ 11
    $arr3 = array('a', 'b', 'c', 'd', 'e');
    $replaceArr = array(0 => '!', 3 => '!!');
    echo 'задание 11: </br>';
    print_r(array_replace($arr3, $replaceArr));
    echo '</br>';

    // ЗАДАНИЕ 21
    $arr4 = array(5,10);
    echo 'задание 21: </br>';
    var_dump(array_sum($arr4) / count($arr4));
    echo '</br>';

    // Задание 31
    $arr5 = range(1, 100);
    echo 'задание 31: </br>';
    print_r($arr5);