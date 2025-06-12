<?php
namespace App\Command;

interface Command {
    public function execute(): string;
}

class Light {
    public function turnOn(): string {
        return "Light is ON";
    }
}

class LightOnCommand implements Command {
    public function __construct(private Light $light) {}

    public function execute(): string {
        return $this->light->turnOn();
    }
}
