<?php
namespace App\Repository;

class User {
    public function __construct(public int $id, public string $name) {}
}

class UserRepository {
    private array $users = [];

    public function save(User $user): void {
        $this->users[$user->id] = $user;
    }

    public function find(int $id): ?User {
        return $this->users[$id] ?? null;
    }
}
