<?php
    // ФУНКЦИИ
    function f($a, $b): int
    {
      $c = $a + $b;
      return $c;
    }

    echo f(3,4).'</br>';

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
    echo '</br>';

    // НАСЛЕДОВАНИЕ
    class Lesson {
      protected $title;
      protected $text;

      function __construct(string $title, string $text){
        $this->title = $title;
        $this->text = $text;
      }

      public function getText(){
        return $this->text;
      }
    }

    $lesson1 = new Lesson('lesson 1', 'la la la');

    class Homework extends Lesson {
      protected $task;

      function __construct(string $title, string $text, $task){
        parent::__construct($title, $text);
        $this->task = $task;
      }
    }

    $homework1 = new Homework('homework 1', 'bla bla bla', 'kek');

    class Labwork extends Homework {
      private $count;

      function __construct(string $title, string $text, $task, $count){
        parent::__construct($title, $text, $task);
        $this->count = $count;
      }
    }

    $laba1 = new Labwork('laba 1', 'he he he', 'lol', 5);
    echo $laba1->getText();

    // ИНТЕРФЕЙСЫ
    class Rectangle{
      private $a;
      private $b;

      public function __contruct($a, $b){
        $this->a = $a;
        $this->b = $b;
      }
    }