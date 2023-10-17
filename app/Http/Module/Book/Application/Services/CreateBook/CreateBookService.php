<?php

namespace App\Http\Module\Book\Application\Services\CreateBook;

use App\Http\Module\Book\Domain\Model\Book;
use App\Http\Module\Book\Infrastructure\Repository\BookRepository;

class CreateBookService
{

    public function __construct(
        private BookRepository $book_repository
    )
    {
    }

    public function execute(CreateBookRequest $request){
        $book = new Book(
            $request->nama,
            $request->author,
            $request->synopsis,
            $request->total_pages,
        );

        $this->book_repository->save($book);
    }
}
