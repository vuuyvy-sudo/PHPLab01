SmartCafe Billing — Manual Test Matrix

1. Test Environment
Web URL: http://localhost/PHPLab01/
Test method: PHP CLI and Browser
Discount threshold: 100000 VND
Member discount rate: 5%
Packaging fee per item: 2000 VND
Service fee rate: 8%

2. Test Cases

T1 — Happy Path

- Input
Unit price: 45000 VND
Raw quantity: "3"
Customer status: MEMBER
Product available: true

- Expected
Subtotal: 135000 VND
Discount: 6750 VND
Packaging fee: 6000 VND
Service fee: 10260 VND
Total: 144510 VND
Status: READY TO ORDER

- Actual: 
Subtotal: 135000 VND
Discount: 6750 VND
Packaging fee: 6000 VND
Service fee: 10260 VND
Total: 144510 VND
Status: READY TO ORDER

- Conclusion: Pass


T2 - No Benefit

- Input
Unit price: 45000 VND
Raw quantity: "2"
Customer status: GUEST
Product available: true

- Expected
Subtotal: 90000 VND
Discount: 0 VND
Packaging fee: 4000 VND
Service fee: 7200 VND
Total: 101200 VND
Status: READY TO ORDER

- Actual
Subtotal:90000 VND
Discount:0 VND
Packaging Fee:4000 VND
Service Fee:7200 VND
Customer Note:None
Total:101200 VND
Status:READY TO ORDER

- Conclusion: Pass

T3 - Boundary

- Input
Unit price: 50000 VND
Raw quantity: "2"
Customer status: MEMBER
Product available: true

- Expected
Subtotal: 100000 VND
Discount: 5000 VND
Packaging fee: 4000 VND
Service fee: 7600 VND
Total: 106600 VND
Status: READY TO ORDER

- Actual
Subtotal:100000 VND
Discount:5000 VND
Packaging Fee:4000 VND
Service Fee:7600 VND
Customer Note:None
Total:106600 VND
Status:READY TO ORDER

- Conclusion: Pass


T4 - Blocked

- Input
Unit price: 45000 VND
Raw quantity: "3"
Customer status: MEMBER
Product available: false

- Expected
Subtotal: 135000 VND
Discount: 6750 VND
Packaging fee: 6000 VND
Service fee: 10260 VND
Total: 144510 VND
Status: BLOCKED

- Actual
Subtotal:135000 VND
Discount:6750 VND
Packaging Fee:6000 VND
Service Fee:10260 VND
Customer Note:None
Total:144510 VND
Status:BLOCKED

- Conclusion: Pass