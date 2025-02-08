<?php
    class Cat{
      private $name; // без геттера и сеттера не сможем изменять данные
      public $color;
      public $weight;

      function setName(string $name){
        $this -> name = $name;
      } // сеттер
      function getName(){
        return $this -> name;
      } // геттер

      function __construct(string $name, string $color, int $weight){
        $this -> name = $name;
        $this -> color = $color;
        $this -> weight = $weight;
      } // конструктор
    }

    // $cat1 = new Cat;
    // var_dump($cat1); // var_dump вывод для объектов
    // echo '</br>';
    // $cat1 -> setName('barsik');
    // $cat1 -> color = 'gray';
    // $cat1 -> weight = 7;
    // echo $cat -> getName();
    // var_dump($cat1);

    $cat2 = new Cat('murka', 'black', 5);
    var_dump($cat2);