<?php
use PHPUnit\Framework\TestCase;
use App\Singleton\Logger;

class LoggerTest extends TestCase {
    public function testSingletonReturnsSameInstance(): void {
        $logger1 = Logger::getInstance();
        $logger2 = Logger::getInstance();

        $this->assertSame($logger1, $logger2);
    }

    public function testLogOutput(): void {
        $this->expectOutputString("[LOG]: Test message\n");
        Logger::getInstance()->log("Test message");
    }
}
