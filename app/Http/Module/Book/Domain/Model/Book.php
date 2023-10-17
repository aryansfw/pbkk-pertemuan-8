<?php

namespace App\Http\Module\Book\Domain\Model;

use App\Models\Cart;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOneThrough;

class Book
{
    /**
     * @param string $nama
     * @param string $author
     * @param string $synopsis
     * @param int $total_pages
     */
    public function __construct(
        public string $nama,
        public string $author,
        public string $synopsis,
        public int $total_pages,
    )
    {
    }
}
