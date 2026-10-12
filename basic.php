<?php

// SmartCafe Billing

const CURRENCY = "VND";
const MEMBER_DISCOUNT_RATE = 0.05;
const MEMBER_MIN = 100000;
const PACKAGING_FEE_PER_ITEM = 2000;
const SERVICE_RATE = 0.08;

// Sample
$productName = "Salt Coffee";       
$unitPrice = 45000.0;               
$rawQuantity = "3";                 
$customerStatus = "MEMBER";         
$productAvailable = true;           
$customerNote = null;              

echo "<pre>";

echo " RAW DATA " . PHP_EOL;

var_dump($productName);
var_dump($unitPrice);
var_dump($rawQuantity);
var_dump($customerStatus);
var_dump($productAvailable);
var_dump($customerNote);

// Explicit casting
$quantity = (int) $rawQuantity;
echo "Raw quantity type: " . gettype($rawQuantity) . PHP_EOL;
echo "Clean quantity type: " . gettype($quantity) . PHP_EOL;

// Subtotal
$subtotal = $unitPrice * $quantity;

// Customer status validation
$isCustomerStatusValid = $customerStatus === "MEMBER" || $customerStatus === "GUEST";

// Member discount
$isMember = $customerStatus === "MEMBER";
$isDiscountEligible = $isMember && $subtotal >= MEMBER_MIN;
$discount = $isDiscountEligible ? $subtotal * MEMBER_DISCOUNT_RATE : 0;

// Packaging
$packagingFee = $quantity * PACKAGING_FEE_PER_ITEM;

// Service fee
$afterDiscount = $subtotal - $discount;
$serviceFee = $afterDiscount * SERVICE_RATE;

// Total
$total = $subtotal - $discount + $packagingFee + $serviceFee;

// Checkout gate
$hasValidQuantity = $quantity > 0;
$canCheckout = $hasValidQuantity && $productAvailable && $isCustomerStatusValid;
$statusText = $canCheckout ? "READY TO ORDER" : "BLOCKED";

// Concatenation
$receipt = "  SMARTCAFE RECEIPT  " . PHP_EOL;
$receipt .= "Product: " . $productName . PHP_EOL;
$receipt .= "Unit Price: " . $unitPrice . " " . CURRENCY . PHP_EOL;
$receipt .= "Quantity: " . $quantity . PHP_EOL;
$receipt .="Subtotal: " . $subtotal . " " . CURRENCY . PHP_EOL;
$receipt .= "Discount: " . $discount . " " . CURRENCY . PHP_EOL;
$receipt .= "Packaging Fee: " . $packagingFee . " " . CURRENCY . PHP_EOL;
$receipt .= "Service Fee: " . $serviceFee . " " . CURRENCY . PHP_EOL;
$receipt .= "Total: " . $total . " " . CURRENCY . PHP_EOL;
$receipt .= "Status: " . $statusText . PHP_EOL;

echo PHP_EOL;
echo $receipt;
echo "</pre>";