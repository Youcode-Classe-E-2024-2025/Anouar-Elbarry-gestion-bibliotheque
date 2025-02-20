<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try{
        $books = Book::all();
        \Log::info('Number of books retrieved: ' . $books->count());
        return view('front.books.list',compact('books'));
        }
        catch(\Exception $e){
            \log::error($e->getMessage());

            return redirect()->back()->with('error', 'unable to retrive books');
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
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
        try{
            $book = Book::find($id);
            return view('front.books.details',compact('book'));
        }catch(\Exception $e){
            \log::error($e->getMessage());
             return redirect()->back()->with('error','enable to show details');
        }
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

    public function Last3books(){
        $Lastbooks = Book::where('is_active', 1)->latest()->take(3)->get();
        return view('front.home',compact('Lastbooks'));
    }
}
