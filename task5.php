<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Список країн</title>
</head>
<body>
<?php

$countries = ["Україна", "Канада", "Франція", "Німеччина", "Італія", "Японія", "США", "Китай", "Бразилія", "Австралія"];

// Виводимо <select> елемент з країнами
echo "<label for='country'>Оберіть країну:</label>";
echo "<select name='country' id='country'>";
foreach ($countries as $country) {
    echo "<option value='" . htmlspecialchars($country) . "'>" . htmlspecialchars($country) . "</option>";
}
echo "</select>";
?>
</body>
</html>