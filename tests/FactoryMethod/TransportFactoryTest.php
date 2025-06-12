<?php
use PHPUnit\Framework\TestCase;
use App\FactoryMethod\TransportFactory;

class TransportFactoryTest extends TestCase {
    public function testTruckDelivery(): void {
        $transport = TransportFactory::getTransport("truck");
        $this->assertEquals("Delivered by land in a box.", $transport->deliver());
    }

    public function testShipDelivery(): void {
        $transport = TransportFactory::getTransport("ship");
        $this->assertEquals("Delivered by sea in a container.", $transport->deliver());
    }

    public function testInvalidTransport(): void {
        $this->expectException(InvalidArgumentException::class);
        TransportFactory::getTransport("plane");
    }
}
