<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookFormRequest;
use Illuminate\Http\Request;
use App\Models\Book;

class bookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BookFormRequest $request)
    {
        $book = Book::create($request->all());

    }

    /**
     * Display the specified resource.
     */
    public function showById(string $id)
    {
        return \App\Models\Book::findOrFail($id);
    }

    /**
     *    paginated list of books
     */
    public function paginatedDisplay()
    {
        return \App\Models\Book::paginate(5);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BookFormRequest $request, string $id)
    {
        $book = Book::findOrFail($id);
        $book->update($request->all());

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $book = Book::findOrFail($id);
        $book->delete();
    }
}
