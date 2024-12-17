<?php
$num1 = 0;
$num2 = 1;
$limit = 20;


echo "Fibonacci Series up to $limit:\n";


while ($num1 <= $limit) {
    echo "$num1 ";
  
    $nextNum = $num1 + $num2;
    
    $num1 = $num2;
    $num2 = $nextNum;
}
?>