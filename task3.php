<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .unique 
        {
            color: red;
            font-size: 20px;
            font-weight: bold;
        }
        .duplicate 
        {
            color: blue;
            font-size: 20px;
            font-weight: bold;
        }
    </style>
</head>
<body>
<?php
// Створюємо масив з 10 елементів
$array = [23, 45, 12, 67, 34, 12, 45, 50, 34, 5];

// Рахуємо кількість повторів кожного числа
$counts = array_count_values($array);

// Виводимо результати з відповідним форматуванням
foreach ($array as $element) 
{
    if ($counts[$element] == 1) 
    {
        echo "<div class='unique'>$element</div>";
    } else {
        echo "<div class='duplicate'>$element</div>";
    }
}
?>
</body>
</html>