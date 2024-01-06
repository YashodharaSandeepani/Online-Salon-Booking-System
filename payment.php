<?php
session_start();

include "connection.php";

$selectedServicePrice = $_SESSION['selected_service_price']
?>
<!DOCTYPE html>
<html>

<head>
    <title>Saloon System</title>
	<script src="payment.js"></script>

    <link rel="stylesheet" type="text/css" href="assets/style.css">
	
</head>

<body>

    <?php

    include 'components/header.php';

    ?>

    <div class="content">
        <div class="registration-form">
            <h2>Payment</h2>
			
            <form action="payment_process.php" method="POST" onsubmit="validateForm(event)">

                <div class="form-group">
                    <label for="cardType">Card Type</label>
                    <select name="cardType" id="cardType" required>
                        <option value="">Select card type</option>
                        <option value="visa">Visa</option>
                        <option value="mastercard">Mastercard</option>
                        <option value="amex">American Express</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="cardNumber">Card Number</label>
                    <input type="text" id="cardNumber" name="cardNumber" placeholder="Enter your card number" required>
                </div>
                <div class="form-group">
                    <label for="cardName">Cardholder Name</label>
                    <input type="text" id="cardName" name="cardName" placeholder="Enter cardholder name" required>
                </div>
                <div class="form-group">
                    <label for="expiryDate">Expiry Date</label>
                    <input type="text" id="expiryDate" name="expiryDate" placeholder="MM/YY" required onkeyup="addSlash(event)">
                </div>
                <div class="form-group">
                    <label for="cvv">CVV</label>
                    <input type="text" id="cvv" name="cvv" placeholder="Enter CVV" required>
                </div>
                <div class="form-group">
                    <label for="paymentAmount">Amount</label>
                    <input type="text" id="paymentAmount" name="paymentAmount" placeholder="Enter amount" required value="<?php echo $selectedServicePrice; ?>" readonly>
                </div>
                <button type="submit" class="btn-pay">Pay Now</button>
            </form>
        </div>
    </div>

    <br>
    <br>
    <br>
    <?php
    include 'components/footer.php';
    ?>

    <script>
        function addSlash(event) {
            const input = event.target;
            const trimmedValue = input.value.replace(/[^0-9]/g, '').substring(0, 4);
            let formattedValue = '';
            if (trimmedValue.length > 2) {
                formattedValue = trimmedValue.substring(0, 2) + '/' + trimmedValue.substring(2);
            } else {
                formattedValue = trimmedValue;
            }
            input.value = formattedValue;
        }
    </script>

</body>

</html>