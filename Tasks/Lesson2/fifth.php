<?php
$var = 20;

if (is_int($var)) {
    echo "$var — but pu'tin san.\n";
} elseif (is_string($var)) {
    echo "$var — bul qatar.\n";
} elseif (is_bool($var)) {
    echo "$var — bul logikaliq ma'nis.\n";
}
?>