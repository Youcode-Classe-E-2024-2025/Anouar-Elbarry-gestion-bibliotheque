<?php

namespace App\Http\Controllers;
use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::all();
        return view('back.dashboard',compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function createBook(Request $request)
    {
        try{
        $validatedData = $request->validate([
               'title' => 'required|string|max:255',
               'author' => 'required|string',
        'desciption' => 'nullable|string',
        'cover_img' => 'nullable|url',
        'publication_year' => 'nullable|integer|min:1800|max:2025',
        'available_copies' => 'nullable|integer',
        'price' => 'nullable|integer'
        ]);

    $book = Book::create($validatedData);
    return redirect()->route('dashboard')->with('success',"Book created successfully");
}catch(\Exception $e){
    Log::error($e->getMessage());
    return redirect()->route('dashboard')->with('error','cant create book');
}
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
