<?php
  //wersja php 7.4.9
  echo PHP_VERSION, '<br>';


  //echo phpinfo();


$potega = 2 ** 10;
echo $potega;
echo 'a'.'b'.'c'; // a+b+c wyswietli abc
echo 'a','b','c<br>'; // wyswietli a wyswietli b wyswietli c



//operatory bitowe
// and &, or |, not ~, xor ^, <<, >>


$x = 0b1010;
echo"$x<br>"; //10
$x = $x << 1;
echo"$x<br>";  //20

$x = $x >>2;
echo"$x<br>"; //101(2) => 1+4=5

  //porównanie
  $x = 10;
  $y = 1;
  echo $x <=> $y;
  $result =  $x <=> $y;
  echo $x <=> $y;






 ?>
