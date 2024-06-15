<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .image-container {
            text-align: center;
        }
        .image-container img {
            width: 150px;
            margin: 10px;
            cursor: pointer;
        }
    </style>
</head>
<body>
<?php
// Масив з інформацією про зображення для ресурсів

$images = [
    "YouTube" => [
        "image" => "youtube.png",
        "link" => "https://www.youtube.com/",
        "alt" => "YouTube Logo"
    ],
    "Facebook" => [
        "image" => "facebook.png",
        "link" => "https://www.facebook.com/",
        "alt" => "Facebook Logo"
    ],
    "Google" => [
        "image" => "google.png",
        "link" => "https://www.google.com/",
        "alt" => "Google Logo"
    ],
    "Gmail" => [
        "image" => "gmail.png",
        "link" => "https://mail.google.com/",
        "alt" => "Gmail Logo"
    ]
];
?>

<div class="image-container">
    <?php foreach ($images as $site => $info): ?>
        <div>
            <a href="<?php echo $info['link']; ?>" target="_blank">
                <img src="<?php echo $info['image']; ?>" alt="<?php echo $info['alt']; ?>">
            </a>
        </div>
    <?php endforeach; ?>
</div>

</body>
</html>