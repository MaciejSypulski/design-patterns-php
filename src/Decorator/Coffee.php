<?php
namespace App\Decorator;

interface Coffee {
    public function getCost(): int;
    public function getDescription(): string;
}

class SimpleCoffee implements Coffee {
    public function getCost(): int {
        return 5;
    }

    public function getDescription(): string {
        return "Simple coffee";
    }
}

class MilkDecorator implements Coffee {
    public function __construct(private Coffee $coffee) {}

    public function getCost(): int {
        return $this->coffee->getCost() + 2;
    }

    public function getDescription(): string {
        return $this->coffee->getDescription() . ", milk";
    }
}
