<?php
use PHPUnit\Framework\TestCase;
use App\Command\{Light, LightOnCommand};

class CommandPatternTest extends TestCase {
    public function testLightOnCommand(): void {
        $light = new Light();
        $command = new LightOnCommand($light);
        $this->assertEquals("Light is ON", $command->execute());
    }
}
