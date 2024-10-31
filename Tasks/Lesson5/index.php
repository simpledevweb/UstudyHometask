<?php

// Тернарные условные операторы 5 задач
//1

$number = 5;
$result = ($number % 2 == 0) ? "Четное" : "Нечетное";
echo $result;

//2

$age = 23;
$result = ($age >= 18) ? "Совершеннолетний" : "Несовершеннолетний";
echo $result;

//3

$word = "helloworld";
$result = (strlen($word) >= 10) ? "Длинная" : "Короткая";
echo $result;

//4

$clock = 19;
$result = (6 <= $clock && $clock <= 18) ? "Днем" : "Ночью";
echo $result;

//5

$input = "password111";
$result = ($input == "password111") ? "Доступ разрешен" : "Неверный пароль";
echo $result;

//Циклы (for, while, do while, foreach) (15 задач)
//1

$s = 0;
for($i=1 ; $i<=100 ; $i++){
    $s += $i;
}
echo $s;

//2

$number = 7;
for($i=1 ; $i<=10 ; $i++){
    echo "$i * $number = " . ($i * $number) . "\n";
}

//3

$array = [12, 23, 11, 2, 1, 5, 6, 3];
$min = $array[0];
foreach ($array as $value) {
    if($min >= $value){
        $min = $value;
    }
}
echo $min;

//4

$number = 5;
$p = 1;
while ($number > 0){
    $p *= $number;
    $number--;
}
echo $p;

//5

$s = 0;
for($i = 2; $i <= 50; $i+=2){
    $s += $i;
}
echo $s;

//6

$number = 10;
do{
echo $number . "\n";
$number--;
}while($number > 0);

//7

$array = [12, 22, 14, 15, -4, 4, -5];
foreach ($array as $key => $value) {
    if($value < 0){
        echo "Index = " . $key . " Value = " . $value . "\n";
        break;
    }
}

//8

for($i = 1; $i <= 20; $i+=2){
    echo $i . "\n";
}

//9

$word = "HelloWorld";
for($i = 0; $i < strlen($word); $i++){
    echo $word[$i] . "\n";
}

//10

$array = [12, -22, 14, 15, -4, 4, -5];
$plus = 0;
foreach ($array as $value) {
    if($value >= 0){
    $plus++;
    }
}
echo "Plus = " . $plus . " Minus = " . (count($array) - $plus) . "\n";

//11

$number = 2;
while ($number < 11){
    echo $number . "\n";
    $number+=2;
}

//12

$primenumber = 17;
$bool = true;

for($i = 2; $i <= sqrt($primenumber); $i++){
    if($primenumber % $i == 0){
        $bool = false;
        break;
    }
}

$result = ($bool) ? "Простое" : "составное";
echo $primenumber . " " . $result;

//13

$first = 1;
$second = 1;
echo $first . " " . $second . " ";
for($i = 3 ; $i <= 10; $i++){
    $fib = $first + $second;
    $first = $second;
    $second = $fib;
    echo $fib . " ";
}

//14

$number = 10;
$s = 0;
do{
    $s += $number;
    $number--;
}while($number > 0);
echo $s;

//15

$array = [12, 23, 14, 15, 4, 1, 3];
print_r($array);

foreach ($array as $key => $value) {
    if($value % 2 == 0){
        $array[$key] = 2 * $value;
    }else{
        $array[$key] = $value - 1;
    }
}
print_r($array);

//Инкремент и декремент (5 задач)
//1

$number = 0;
$i = 1;
while($number != 11){
    $number++;
    $i++;
}
echo $i;

//2

$i = 2;
while ($i <= 20){
    echo $i . "\n";
    $i +=2;
}

//3

$number = 10;
while ($number != 0){
    echo $number-- . "\n";
}

//4

$a = 3;
$b = 30;

while ($a < $b){
    $a *=2;
}
echo $a;

//5

for($i = 20; $i >= 0; $i-=2){
    echo $i . "\n";
}