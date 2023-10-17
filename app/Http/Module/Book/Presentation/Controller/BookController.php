<?php

namespace App\Http\Module\Book\Presentation\Controller;

use App\Http\Module\Book\Application\Services\CreateBook\CreateBookRequest;
use App\Http\Module\Book\Application\Services\CreateBook\CreateBookService;
use Illuminate\Http\Request;

class BookController
{
    public function __construct(
        private CreateBookService $create_book_service
    )
    {
    }

    public function createBook(Request $request){
        // dd($request);
        $request = new CreateBookRequest(
            $request->input('nama'),
            $request->input('author'),
            $request->input('synopsis'),
            $request->input('total_pages'),
        );

        return $this->create_book_service->execute($request);
    }
}
