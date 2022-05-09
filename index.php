<?php 

include_once __DIR__ . "./classes/Card.php";
include_once __DIR__ . "./classes/Cart.php";
include_once __DIR__ . "./classes/Product.php";
include_once __DIR__ . "./classes/UnregisteredUser.php";
include_once __DIR__ . "./classes/RegisteredUser.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP 2</title>
</head>
<body>
    <?php 
        $product1 = new Product("Guinzaglio", "Accessori per cani", 2.12);
    ?>
</body>
</html>