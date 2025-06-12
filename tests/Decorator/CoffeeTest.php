<?php
use PHPUnit\Framework\TestCase;
use App\Decorator\{SimpleCoffee, MilkDecorator};

class CoffeeTest extends TestCase {
    public function testSimpleCoffee(): void {
        $coffee = new SimpleCoffee();
        $this->assertEquals(5, $coffee->getCost());
        $this->assertEquals("Simple coffee", $coffee->getDescription());
    }

    public function testMilkDecorator(): void {
        $coffee = new MilkDecorator(new SimpleCoffee());
        $this->assertEquals(7, $coffee->getCost());
        $this->assertEquals("Simple coffee, milk", $coffee->getDescription());
    }
}
