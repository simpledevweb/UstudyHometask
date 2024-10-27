<?php

function calculate($a, $b) {
    return "Qosindisi: " . ($a + $b) . "\n" . "Ayirmasi: " . ($a- $b) . "\n" . "Kobeymesi: " . ($b * $a) . "\n" . "Bolinmesi: " . ($a / $b) . "\n";
}

echo calculate(10, 5);