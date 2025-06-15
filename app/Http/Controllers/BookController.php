<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
class BookController extends Controller
{
    public function index(){
        $books = Book::all();
        return view('Book', compact('books'));
    }

    public function create(){

    }

    public function store(Request $request){
        $book = new Book();
        $book->bookName = $request->input('bookName');
        $book->bookCode = $request->input('Author');
        $book->bookAuthor = $request->input('Description');
        $book->save();

        return response()->json([
            'message' => 'Book created successfully!',
            '   data' => $book
        ]);
    }

    public function show($id){
        
    }

    public function edit($id){
        
    }

    public function update(Request $request, $id){
        
    }

    public function destroy($id){
        
    }
}
