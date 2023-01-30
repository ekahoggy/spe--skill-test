<?php

function narcissistic(int $number): bool {
    $array   = str_split($number);
    $nlenght = count($array);
    $sum = 0;
  
    foreach($array as $n){
      $sum += pow((int)$n, $nlenght);
    }	

    if($sum==$number){
      return true;
    }
    else{
      return false;
    }
}

var_dump(narcissistic(153));

?>