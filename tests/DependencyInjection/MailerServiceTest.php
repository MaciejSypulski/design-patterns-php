<?php
use PHPUnit\Framework\TestCase;
use App\DependencyInjection\{Mailer, UserService};

class MailerServiceTest extends TestCase {
    public function testNotification(): void {
        $mailer = new Mailer();
        $service = new UserService($mailer);
        $this->assertEquals("Sending: Hello!", $service->notify("Hello!"));
    }
}
