<?php
const PI = 3.14159;

function calculateCircleArea($radius) {
    return PI * $radius **2;
}

echo calculateCircleArea(5); // Juwap: 78.53975
echo calculateCircleArea(2); // Juwap: 12.56636