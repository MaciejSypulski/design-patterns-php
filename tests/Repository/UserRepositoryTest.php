<?php
use PHPUnit\Framework\TestCase;
use App\Repository\{User, UserRepository};

class UserRepositoryTest extends TestCase {
    public function testUserRepository(): void {
        $repo = new UserRepository();
        $user = new User(1, "John");
        $repo->save($user);

        $found = $repo->find(1);
        $this->assertNotNull($found);
        $this->assertEquals("John", $found->name);
    }
}
