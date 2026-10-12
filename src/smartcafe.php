<?php

$quantity = (int) $rawQuantity;
$rawQuantityType = gettype($rawQuantity);
$cleanQuantityType = gettype($quantity);

// Subtotal
$subtotal = $unitPrice * $quantity;

// Validate customer status
$isCustomerStatusValid = $customerStatus === "MEMBER" || $customerStatus === "GUEST";

// Member discount
$isMember = $customerStatus === "MEMBER";
$isDiscountEligible = $isMember && $subtotal >= MEMBER_MIN;

$discount = $isDiscountEligible ? $subtotal * MEMBER_DISCOUNT_RATE : 0;

// Packaging fee
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

// Null handling
$customerNoteText = ($customerNote === null) ? "None" : $customerNote;
