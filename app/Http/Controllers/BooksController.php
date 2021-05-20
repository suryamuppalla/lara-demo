<?php

namespace App\Http\Controllers;
use App\Books;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    //
    public function getAllBooks(Request $request)
    {
        $searchTerm = $request->input("searchText");
        // logic to get all Books goes here
        $books = Books::query()
            ->where('title', 'LIKE', "%{$searchTerm}%")
            ->get()->toJson(JSON_PRETTY_PRINT);
        return response($books, 200);
    }

    public function createBook(Request $request)
    {
        // logic to create a Book record goes here
        $book = new Books();
        $book->title = $request->title;
        $book->price = $request->price;
        $book->author = $request->author;
        $book->description = $request->description;
        $book->language = $request->language;
        $book->rating = $request->rating;
        $book->img = $request->img;
        $book->save();

        return response()->json([
            "message" => "Book created"
        ], 201);
    }

    public function getBook($id)
    {
        // logic to get a Book record goes here
        if (Books::where('id', $id)->exists()) {
            $book = Books::where('id', $id)->get()->toJson(JSON_PRETTY_PRINT);
            return response($book, 200);
        } else {
            return response()->json([
                "message" => "Book not found"
            ], 404);
        }
    }

    public function updateBook(Request $request, $id)
    {
        // logic to update a Book record goes here
    }

    public function deleteBook($id)
    {
        // logic to delete a Book record goes here
    }
}
