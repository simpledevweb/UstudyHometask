<?php
$month = 5;

if ($month >= 1 && $month <= 3) {
    echo "Qis";
} elseif ($month >= 4 && $month <= 6) {
    echo "Bahar";
} elseif ($month >= 7 && $month <= 9) {
    echo "Jaz";
} elseif ($month >= 10 && $month <= 12) {
    echo "Gu'z";
} else {
    echo "Qate mawsim san kiritildi";
}