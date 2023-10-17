<?php

namespace App\Http\Module\Book\Infrastructure\Repository;

use App\Http\Module\Book\Domain\Model\Book;
use App\Http\Module\Book\Domain\Services\Repository\BookRepositoryInterface;
use Illuminate\Support\Facades\DB;

class BookRepository implements BookRepositoryInterface
{
    public function save(Book $book)
    {
        DB::table('books')->upsert(
            [
                'nama' => $book->nama,
                'author' => $book->author,
                'synopsis' => $book->synopsis,
                'total_pages' => $book->total_pages,
            ],'nama'
        );
    }
}
