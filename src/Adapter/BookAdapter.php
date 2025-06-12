<?php
namespace App\Adapter;

class EBook {
    public function read(): string {
        return "Reading eBook";
    }
}

interface PaperBook {
    public function open(): string;
}

class BookAdapter implements PaperBook {
    public function __construct(private EBook $eBook) {}

    public function open(): string {
        return $this->eBook->read();
    }
}
