<?php
const LENGTH = 10;
const WIDTH = 5;

function calculateRectangle() {
    return "Maydani: " . (LENGTH * WIDTH) . ", Perimetr: " . (2 * (LENGTH + WIDTH));
}

echo calculateRectangle(); // Ожидаемый результат: Площадь: 50, Периметр: 30