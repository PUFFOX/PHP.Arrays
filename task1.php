<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// Створюємо масив з 10 елементів
$array = [23, 45, 12, 67, 34, 89, 10, 50, 32, 5];

// Виводимо парні елементи
echo "Парні елементи:\n";
foreach ($array as $element) 
{
    if ($element % 2 == 0) 
    {
        echo $element . " ";
    }
}
echo "\n";

// Знаходимо та виводимо максимальний та мінімальний елемент
$max = max($array);
$min = min($array);
echo "Максимальний елемент: " . $max . "\n";
echo "Мінімальний елемент: " . $min . "\n";

// Сортуємо масив за зростанням
sort($array);
echo "Відсортований масив:\n";
foreach ($array as $element) 
{
    echo $element . " ";
}
echo "\n";

?>
</body>
</html>