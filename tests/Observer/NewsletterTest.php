<?php
use PHPUnit\Framework\TestCase;
use App\Observer\{User, Newsletter};

class NewsletterTest extends TestCase {
    public function testObserverNotification(): void {
        $newsletter = new Newsletter();
        $user1 = new User("Alice");
        $user2 = new User("Bob");

        $newsletter->subscribe($user1);
        $newsletter->subscribe($user2);

        $result = $newsletter->notify("New post");

        $this->assertEquals(["Alice received: New post", "Bob received: New post"], $result);
    }
}
