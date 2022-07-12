<?php



  require_once  __DIR__ . '/Node.php';
  require_once  __DIR__ . '/Seguence.php';
  require_once  __DIR__  . '/Stack.php';
  require_once  __DIR__ . '/Queue.php';


   $startAt = microtime(as_float: true);
   $stack = new Queue();

   $n=10000;

   for($i = 0; $i < $n; $i++) {
       $stack->push(random_int( 1 ,10000));
   }

    for($i = 0; $i < $n; $i++) {
        echo $stack->pop() . " <br>\n "; // цикл вывода случайных чисел
    }

      echo microtime(as_float: true)- $startAt;


