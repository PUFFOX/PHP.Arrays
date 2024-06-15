<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// Створюємо два масиви з числами по 10 елементів
$array1 = [23, 45, 12, 67, 34, 89, 10, 50, 32, 5];
$array2 = [15, 45, 32, 67, 34, 89, 60, 70, 80, 90];

// Об'єднуємо унікальні значення з двох масивів
$mergedArray = array_unique(array_merge($array1, $array2));

// Виводимо результати
echo "Перший масив:<br>";
foreach ($array1 as $element) {
    echo $element . " ";
}
echo "<br>";

echo "Другий масив:<br>";
foreach ($array2 as $element) {
    echo $element . " ";
}
echo "<br>";

echo "Об'єднаний масив з унікальними значеннями:<br>";
foreach ($mergedArray as $element) {
    echo $element . " ";
}
echo "<br>";
?>

</body>
</html>