<?php
use PHPUnit\Framework\TestCase;
use App\Adapter\{BookAdapter, EBook};

class BookAdapterTest extends TestCase {
    public function testAdapter(): void {
        $adapter = new BookAdapter(new EBook());
        $this->assertEquals("Reading eBook", $adapter->open());
    }
}
