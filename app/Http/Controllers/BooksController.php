<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Models\Book;
use App\Http\Requests\BookRequest;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index(Request $request)
    {
        $author_id=$request->input('author_id');
       //$books= Book::all();
       $books=Book::where('author_id',$author_id )->get();
        return view('books.index', ['books'=>$books, 'author_id'=>$author_id]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('books.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  BookRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(BookRequest $request)
    {
        $author_id = $request->input('author_id');

        $book = new Book;
		$book->title = $request->input('title');
		$book->author_id = $request->input('author_id');
        $book->save();

       // return to_route('books.index');
        return redirect("/books?author_id={$author_id}");
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\View
     */
    public function show($id)
    {
        $book = Book::findOrFail($id);
        return view('books.show',['book'=>$book]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        $book = Book::findOrFail($id);
        return view('books.edit',['book'=>$book]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  BookRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(BookRequest $request, $id)
    {
        $author_id = $request->input('author_id');
        $book = Book::findOrFail($id);
		$book->title = $request->input('title');
		$book->author_id = $request->input('author_id');
        $book->save();

        //return to_route('books.index');
        return redirect("/books?author_id={$author_id}");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $book = Book::findOrFail($id);
        $author_id=$book->author_id;
        $book->delete();
        return redirect()->route('books.index',['author_id' =>$author_id]);

       // return to_route('books.index');
    }
}
