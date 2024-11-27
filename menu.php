<?php
function menu() {
    echo "Выберите действие:\n";
    echo "1. Сложение\n";
    echo "2. Вычитание\n";
    echo "3. Деление\n";
    echo "4. Возведение в степень\n";
    $choice = readline("Введите номер действия: ");
    return $choice;
}

echo "Добро пожаловать в калькулятор!\n";
$num1 = (int)readline("Введите первое число: ");
$num2 = (int)readline("Введите второе число: ");
$choice = menu();

switch ($choice) {
    case 1:
        echo "Результат: " . ($num1 + $num2) . "\n";
        break;
    case 2:
        echo "Результат: " . ($num1 - $num2) . "\n";
        break;
    case 3:
        echo $num2 == 0 ? "Ошибка: деление на ноль\n" : "Результат: " . ($num1 / $num2) . "\n";
        break;
    case 4:
        echo "Результат: " . pow($num1, $num2) . "\n";
        break;
    default:
        echo "Неверный выбор\n";
}

function addition($a, $b) {
    return $a + $b;
}


?>
