<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Models\Author;
use App\Http\Requests\AuthorRequest;

class AuthorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        $authors= Author::all();
        return view('authors.index', ['authors'=>$authors]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('authors.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  AuthorRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(AuthorRequest $request)
    {
        $author = new Author;
		$author->name = $request->input('name');
        $author->save();

        return to_route('authors.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\View
     */
    public function show($id)
    {
        $author = Author::findOrFail($id);
        return view('authors.show',['author'=>$author]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        $author = Author::findOrFail($id);
        return view('authors.edit',['author'=>$author]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  AuthorRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(AuthorRequest $request, $id)
    {
        $author = Author::findOrFail($id);
		$author->name = $request->input('name');
        $author->save();

        return to_route('authors.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $author = Author::findOrFail($id);
        $author->delete();

        return to_route('authors.index');
    }
}
