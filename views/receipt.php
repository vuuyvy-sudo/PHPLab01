<?php
/** @var string $rawQuantityType */
/** @var string $cleanQuantityType */
/** @var float $subtotal */
/** @var float $discount */
/** @var int|float $packagingFee */
/** @var float $serviceFee */
/** @var string $customerNoteText */
/** @var float $total */
/** @var string $statusText */
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SmartCafe Billing</title>
</head>

<body>

    <h1>SmartCafe Billing</h1>
    <h2>Order Summary</h2>

    <p>Product: <?= $productName ?></p>
    <p>Unit Price: <?= $unitPrice ?> <?= CURRENCY ?></p>
    <p>Quantity: <?= $quantity ?></p>
    <p>Customer Status: <?= $customerStatus ?></p>
    <p>Product Available: <?= $productAvailable ? "TRUE" : "FALSE" ?></p>

    <h2>Type Boundary Evidence</h2>

    <p>Raw Quantity: <?= $rawQuantity ?></p>
    <p>Raw Quantity Type: <?= $rawQuantityType ?></p>
    <p>Clean Quantity Type: <?= $cleanQuantityType ?></p>

    <h2>Calculation</h2>

    <p>Subtotal:<?= $subtotal ?> <?= CURRENCY ?></p>
    <p>Discount:<?= $discount ?> <?= CURRENCY ?></p>
    <p>Packaging Fee:<?= $packagingFee ?> <?= CURRENCY ?></p>
    <p>Service Fee:<?= $serviceFee ?> <?= CURRENCY ?></p>
    <p> Customer Note:<?= $customerNoteText ?></p>
    <p>
        <strong>Total:<?= $total ?> <?= CURRENCY ?>
        </strong>
    </p>
    <p>
        <strong>Status:<?= $statusText ?>
        </strong>
    </p>

</body>
</html>