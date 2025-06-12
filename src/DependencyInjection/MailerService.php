<?php
namespace App\DependencyInjection;

class Mailer {
    public function send(string $message): string {
        return "Sending: $message";
    }
}

class UserService {
    public function __construct(private Mailer $mailer) {}

    public function notify(string $message): string {
        return $this->mailer->send($message);
    }
}
