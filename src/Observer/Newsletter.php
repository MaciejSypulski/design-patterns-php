<?php
namespace App\Observer;

interface Observer {
    public function update(string $message): string;
}

class User implements Observer {
    public function __construct(private string $name) {}

    public function update(string $message): string {
        return "{$this->name} received: $message";
    }
}

class Newsletter {
    private array $observers = [];

    public function subscribe(Observer $observer): void {
        $this->observers[] = $observer;
    }

    public function notify(string $message): array {
        $results = [];
        foreach ($this->observers as $observer) {
            $results[] = $observer->update($message);
        }
        return $results;
    }
}
