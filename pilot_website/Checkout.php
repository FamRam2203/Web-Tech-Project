<?php
$burgerQuantity = 2;
$friesQuantity = 1;
$pizzaQuantity = 3;
$SpaghettiQuantity = 2;

if (isset($_POST['burger-increment'])) {
    $burgerQuantity++;
} elseif (isset($_POST['burger-decrement']) && $burgerQuantity > 0) {
    $burgerQuantity--;
}

if (isset($_POST['fries-increment'])) {
    $friesQuantity++;
} elseif (isset($_POST['fries-decrement']) && $friesQuantity > 0) {
    $friesQuantity--;
}

if (isset($_POST['pizza-increment'])) {
    $pizzaQuantity++;
} elseif (isset($_POST['pizza-decrement']) && $pizzaQuantity > 0) {
    $pizzaQuantity--;
}

if (isset($_POST['Spaghetti-increment')) {
    $SpaghettiQuantity++;
} elseif (isset($_POST['Spaghetti-decrement']) && $SpaghettiQuantity > 0) {
    $SpaghettiQuantity--;
}

$burgerPrice = $burgerQuantity * 8.99;
$friesPrice = $friesQuantity * 3.99;
$pizzaPrice = $pizzaQuantity * 10.99;
$SpaghettiPrice = $SpaghettiQuantity * 12.99;
$totalAmount = $burgerPrice + $friesPrice + $pizzaPrice + $SpaghettiPrice;
?>

<!DOCTYPE html>
<html>
<head>
    <style>
        /* Styles for the checkout page */
        .checkout-container {
            width: 80%;
            margin: 0 auto;
            text-align: center;
        }

        .input-field {
            display: block;
            margin: 20px 0;
        }

        .input-field label {
            font-size: 18px;
            display: block;
        }

        .input-field input[type="text"],
        .input-field input[type="tel"] {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ddd;
            border-radius: 5px;
            outline: none;
        }

        .payment-options {
            margin: 20px 0;
        }

        .order-summary {
            text-align: left;
        }

        .order-summary ul {
            list-style-type: none;
            padding: 0;
        }

        .order-summary li {
            margin: 10px 0;
        }

        .counter-button {
            background-color: #007BFF;
            color: #fff;
            padding: 5px 10px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .total-amount {
            font-size: 18px;
            margin: 20px 0;
        }

        .checkout-button {
            background-color: #007BFF;
            color: #fff;
            padding: 10px 20px;
            font-size: 18px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="checkout-container">
        <h1>Checkout</h1>

        <div class="input-field">
            <label for="address">Delivery Address:</label>
            <input type="text" id="address">
        </div>

        <div class="input-field">
            <label for="mobile">Mobile Number:</label>
            <input type="tel" id="mobile">
        </div>

        <div class="payment-options">
            <label>Payment Options:</label><br>
            <input type="radio" id="cash" name="payment" value="cash">
            <label for="cash">Cash</label>
            <input type="radio" id="card" name="payment" value="card">
            <label for="card">Card</label>
        </div>

        <form method="post" action="checkout.php">
            <div class="order-summary">
                <h2>Order Summary</h2>
                <ul>
                    <li>Burger x
                        <button class="counter-button" name="burger-increment">+</button>
                        <span><?php echo $burgerQuantity; ?></span>
                        <button class="counter-button" name="burger-decrement">-</button>
                    </li>
                    <li>Fries x
                        <button class="counter-button" name="fries-increment">+</button>
                        <span><?php echo $friesQuantity; ?></span>
                        <button class="counter-button" name="fries-decrement">-</button>
                    </li>
                    <li>Pizza x
                        <button class="counter-button" name="pizza-increment">+</button>
                        <span><?php echo $pizzaQuantity; ?></span>
                        <button class="counter-button" name="pizza-decrement">-</button>
                    </li>
                    <li>Spaghetti x
                        <button class="counter-button" name="Spaghetti-increment">+</button>
                        <span><?php echo $SpaghettiQuantity; ?></span>
                        <button class="counter-button" name="Spaghetti-decrement">-</button>
                    </li>
                </ul
                </div>
            
            <?php
                // Calculate total amount
                $burgerPrice = $burgerQuantity * 8.99;
                $friesPrice = $friesQuantity * 3.99;
                $pizzaPrice = $pizzaQuantity * 10.99;
                $SpaghettiPrice = $SpaghettiQuantity * 12.99;
                $totalAmount = $burgerPrice + $friesPrice + $pizzaPrice + $SpaghettiPrice;
            ?>

            <div class="total-amount">
                Total Amount: $<?php echo number_format($totalAmount, 2); ?>
            </div>

            <button class="checkout-button">Confirm Order</button>
        </form>
    </div>
</body>
</html>
