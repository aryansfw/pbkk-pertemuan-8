<?php

namespace App\Http\Module\Book\Application\Services\CreateBook;

class CreateBookRequest
{
    public function __construct(
        public string $nama,
        public string $author,
        public string $synopsis,
        public int $total_pages,
    )
    {
    }
}
