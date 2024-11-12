<?php
$x = -3;
$y = 4;

if ($x > 0 && $y > 0) {
    echo "1-й";
} elseif($x < 0 && $y > 0) {
    echo "2-й";
} elseif($x < 0 && $y < 0) {
    echo "3-й";
} else {
    echo "4-й";
}