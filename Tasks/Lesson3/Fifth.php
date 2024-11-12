<?php

function mathOperations($a, $b) {
    return "Qosindisi " . $a . " ha'm " . $b . " = " . ($a + $b) . "\n" .
        "Ayirmasi " . $a . " ha'm " . $b . " = " . ($a- $b) . "\n" .
        "Kobeymesi " . $a . " ha'm " . $b . " = " . ($b * $a) . "\n" .
        "Bolinmesi " . $a . " ha'm " . $b . " = " . ($a / $b) . "\n";
}

echo mathOperations(7, 3);