<?php
include 'Product.php';
include 'Cart.php';
include 'DatabaseHandler.php';

$databaseHandler = new DatabaseHandler("localhost", "your_username", "your_password", "ecommerce_db");
$product1 = $databaseHandler->getProductById(1);
$product2 = $databaseHandler->getProductById(2);
$product3 = $databaseHandler->getProductById(3);

$cart = new Cart();
 //-> operator is used to access properties and methods of the object.
$cart->addToCart($product1);
$cart->addToCart($product2);
$cart->addToCart($product3);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Simple E-commerce Cart</title>
</head>
<body>
    <h2>Cart</h2>
    <ul>
        <?php
        foreach ($cart->getProducts() as $product)
         {
            echo "<li>{$product->getName()} - \${$product->getPrice()}</li>";
         }
        ?>
    </ul>

    <h3>Total Bill: $<?php echo $cart->calculateTotal(); ?></h3>
</body>
</html>
