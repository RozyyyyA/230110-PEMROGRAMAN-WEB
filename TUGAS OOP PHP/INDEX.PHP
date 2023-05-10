<?php
require_once('PRODUCT.php');
require_once('CDMUSIC.php');
require_once('CDRACK.php');
?>

<!DOCTYPE html>
<html>

<head>
    <title>TUGAS OOP PHP</title>

    <style>
    body {
        font-family: sans-serif;
        margin: 0;
        padding: 0;
        background-color: #000;
        color: #ff1493;
    }

    .container {
        max-width: 800px;
        margin: 0 auto;
        padding: 20px;
        background-color: #111;
        border-radius: 5px;
        box-shadow: 0 2px 5px rgba(255, 105, 180, 0.3);
    }

    h1 {
       text-align: left;
        margin-bottom: 30px;
    }

    .product-list {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 20px;
        margin-top: 30px;
    }

    .product {
        background-color: #222;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 2px 5px rgba(255, 105, 180, 0.3);
        text-align: left;
    }

    .product h2 {
        font-size: 18px;
        margin-bottom: 10px;
    }

    .product p {
        font-size: 14px;
        margin-bottom: 5px;
    }

    .product p.price {
        font-weight: bold;
    }

    .product p.discount {
        color: #ff1493;
    }

    .product p.final-price {
        font-weight: bold;
        color: #ff1493;
        margin-top: 10px;
    }

    .product-list h4 {
        text-align: left;
        margin-bottom: 20px;
    }   

    /* copyright */
    h6 {
        margin: 20px 20px;
        color: #ff1493;
        justify-content: center;
        display: flex;
    }

    </style>

</head>

<body>
    <h1>TUGAS OOP PHP - PRODUCT CATALOG</h1>
    <h4>Nama : Achmad Rozy Priambodo <br>NPM  : 21081010070</h4>

    <?php
    echo "<h4>PRODUCT LIST</h4>";

    $products = [
        new Product("STARBOY", 990000, 0.1),
        new Product("SOS", 550000, 0.1),
        new Product("KONSPIRASI ALAM SEMESTA", 750000, 0.15),
        new Product("FLYING SOLO", 130000, 0.15),
    ];

    echo "<div class='product-list'>";
    foreach ($products as $product) {
        echo "<div class='product'>";
        echo "<h2>" . $product->getName() . "</h2>";
        echo "<p>Price: " . $product->getPrice() . "</p>";
        echo "<p>Discount: " . ($product->getDiscount() * 100) . "%</p>";
        echo "</div>";
    }
    echo "</div>";

    echo "<h4>MUSIC PRODUCT LIST</h4>";

    $musicProducts = [
        new CDMusic("STARBOY", 990000, 0, "The Weekend", "R&B"),
        new CDMusic("SOS", 550000, 0, "SZA", "R&B"),
    ];

    echo "<div class='product-list'>";
    foreach ($musicProducts as $musicProduct) {
        echo "<div class='product'>";
        echo "<h2>" . $musicProduct->getName() . "</h2>";
        echo "<p>Artist: " . $musicProduct->getArtist() . "</p>";
        echo "<p>Genre: " . $musicProduct->getGenre() . "</p>";
        echo "<p>Price: " . $musicProduct->getPrice() . "</p>";
        echo "<p>Discount: " . ($musicProduct->getDiscount() * 100) . "%</p>";
        echo "<p>Discounted Price: " . $musicProduct->FinalPrice() . "</p>";
        echo "</div>";
    }
    echo "</div>";

    echo "<h4>RACK PRODUCT LIST</h4>";

    $rackProducts = [
        new CDRack("KONSPIRASI ALAM SEMESTA", 75000, 0, "50", "Rak Dinding Besi"),
        new CDRack("FLYING SOLO", 130000, 0, "35", "Rak Dinding Kayu"),
    ];

    echo "<div class='product-list'>";
    foreach ($rackProducts as $rackProduct) {
        echo "<div class='product'>";
        echo "<h2>" . $rackProduct->getName() . "</h2>";
        echo "<p>Model: " . $rackProduct->getModel() . "</p>";
        echo "<p>Capacity: " . $rackProduct->getCapacity() . "</p>";
        echo "<p>Price: " . $rackProduct->getPrice() . "</p>";
        echo "<p>Discount: " . ($rackProduct->getDiscount() * 100) . "%</p>";
        echo "<p>Discounted Price: " . $rackProduct->FinalPrice() . "</p>";
        echo "</div>";
    }
    echo "</div>";
    ?>
    <h6>copyright@2023 - Achmad Rozy</h6>
</body>

</html>