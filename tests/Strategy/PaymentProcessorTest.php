<?php
use PHPUnit\Framework\TestCase;
use App\Strategy\{PaymentProcessor, PayPalStrategy, CreditCardStrategy};

class PaymentProcessorTest extends TestCase {
    public function testPayPalStrategy(): void {
        $processor = new PaymentProcessor(new PayPalStrategy());
        $this->assertEquals("Paid 100 using PayPal.", $processor->pay(100));
    }

    public function testCreditCardStrategy(): void {
        $processor = new PaymentProcessor(new CreditCardStrategy());
        $this->assertEquals("Paid 200 using Credit Card.", $processor->pay(200));
    }
}
