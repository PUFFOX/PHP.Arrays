<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php


$fruits = [
    ["name" => "Апельсин", "type" => "Цитрус", "price" => 30, "quantity" => 5],
    ["name" => "Яблуко", "type" => "Яблуко", "price" => 20, "quantity" => 10],
    ["name" => "Лимон", "type" => "Цитрус", "price" => 25, "quantity" => 7],
    ["name" => "Банан", "type" => "Тропічний", "price" => 15, "quantity" => 12],
    ["name" => "Мандарин", "type" => "Цитрус", "price" => 40, "quantity" => 4],
    ["name" => "Груша", "type" => "Яблуко", "price" => 22, "quantity" => 6],
    ["name" => "Ананас", "type" => "Тропічний", "price" => 50, "quantity" => 3],
    ["name" => "Ківі", "type" => "Тропічний", "price" => 35, "quantity" => 8],
    ["name" => "Грейпфрут", "type" => "Цитрус", "price" => 45, "quantity" => 2],
    ["name" => "Персик", "type" => "Кісточковий", "price" => 28, "quantity" => 9]
];

// a) Виводимо лише цитрусові фрукти
echo "<h2>Цитрусові фрукти</h2>";
foreach ($fruits as $fruit) 
{
    if ($fruit["type"] == "Цитрус") 
    {
        echo "Назва: " . $fruit["name"] . ", Ціна: " . $fruit["price"] . ", Кількість: " . $fruit["quantity"] . "<br>";
    }
}

// b) Порахувати ціну фруктів та вивести
echo "<h2>Ціна фруктів</h2>";
foreach ($fruits as $fruit) 
{
    $totalPrice = $fruit["price"] * $fruit["quantity"];
    echo "Назва: " . $fruit["name"] . ", Загальна ціна: " . $totalPrice . "<br>";
}

// c) Порахувати загальну ціну усіх фруктів
$totalCost = 0;
foreach ($fruits as $fruit) 
{
    $totalCost += $fruit["price"] * $fruit["quantity"];
}
echo "<h2>Загальна ціна усіх фруктів</h2>";
echo "Загальна ціна: " . $totalCost;

?>
</body>
</html>