<?php
$a = 11;
$b = 5;
$operation = '+';

switch ($operation) {
    case '+': echo $a + $b; break;
    case '-': echo $a - $b; break;
    case '*': echo $a * $b; break;
    case '/': echo $b != 0 ? $a / $b : "Qate boliwshi 0"; break;
    default: echo "Operator qate";
}