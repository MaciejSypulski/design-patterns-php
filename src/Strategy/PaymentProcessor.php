<?php
namespace App\Strategy;

interface PaymentStrategy {
    public function pay(int $amount): string;
}

class PayPalStrategy implements PaymentStrategy {
    public function pay(int $amount): string {
        return "Paid $amount using PayPal.";
    }
}

class CreditCardStrategy implements PaymentStrategy {
    public function pay(int $amount): string {
        return "Paid $amount using Credit Card.";
    }
}

class PaymentProcessor {
    public function __construct(private PaymentStrategy $strategy) {}

    public function pay(int $amount): string {
        return $this->strategy->pay($amount);
    }
}
