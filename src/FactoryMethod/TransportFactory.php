<?php
namespace App\FactoryMethod;

interface Transport {
    public function deliver(): string;
}

class Truck implements Transport {
    public function deliver(): string {
        return "Delivered by land in a box.";
    }
}

class Ship implements Transport {
    public function deliver(): string {
        return "Delivered by sea in a container.";
    }
}

class TransportFactory {
    public static function getTransport(string $type): Transport {
        return match($type) {
            'truck' => new Truck(),
            'ship' => new Ship(),
            default => throw new \InvalidArgumentException("Invalid transport type")
        };
    }
}
