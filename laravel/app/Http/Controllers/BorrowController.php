<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Exception;
use Illuminate\Http\Request;
use App\Models\Borrow;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class BorrowController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
{
    // Find the book or throw an exception
    $bookId = $request->input('book_id');
    
    // Check book availability
    if (!$bookId) {
        return back()->with('error', 'No book selected for borrowing');
    }

    try {
        $book = Book::findOrFail($bookId);

        // Check book availability
        if ($book->available_copies <= 0) {
            return back()->with('error', 'Sorry, this book is not available for borrowing.');
        }

        // Create borrow record
        $borrow = Borrow::create([
            'user_id' => Auth::id(),
            'book_id' => $bookId,
            'borrow_date' => now()
        ]);

        // Verify borrow was created
        if (!$borrow) {
            \Log::error('Failed to create borrow record', [
                'user_id' => Auth::id(),
                'book_id' => $bookId
            ]);
            return back()->with('error', 'Failed to process book borrowing');
        }

        // Decrement available copies
        $book->decrement('available_copies');

        // Log successful borrow
        \Log::info('Book borrowed successfully', [
            'borrow_id' => $borrow->id,
            'user_id' => Auth::id(),
            'book_id' => $bookId
        ]);

        // Redirect to borrowed books page
        return redirect()->route('showmyBooks')
            ->with('success', 'Book borrowed successfully');

    } catch(\Illuminate\Database\QueryException $e) {
        // Specific database-related error handling
        \Log::error('Database error during book borrowing', [
            'error' => $e->getMessage(),
            'user_id' => Auth::id(),
            'book_id' => $bookId
        ]);
        return back()->with('error', 'Database error occurred. Please try again.');

    } catch(Exception $e) {
        // General error handling
        \Log::error('Error during book borrowing', [
            'error' => $e->getMessage(),
            'user_id' => Auth::id(),
            'book_id' => $bookId
        ]);
        return back()->with('error', 'An unexpected error occurred while borrowing the book');
    }
}
    /**
     * Show the form for creating a new resource.
     */
    public function show()
{
    try {
        // Fetch user's borrowed books with related book information
        $borrows = Borrow::where('user_id', Auth::id())
            ->with('book') // Eager load the related book to avoid N+1 query
            ->latest('borrow_date')
            ->paginate(6); // Paginate with 6 items per page

        // Log the number of borrowed books
        \Log::info('Number of borrowed books retrieved: ' . $borrows->count(), [
            'user_id' => Auth::id()
        ]);

        // Return the view with borrowed books
        return view('front.all_borrows', compact('borrows'));
    }
    catch(Exception $e) {
        // Log the error with more context
        \Log::error('Error retrieving borrowed books', [
            'user_id' => Auth::id(),
            'error' => $e->getMessage()
        ]);

        // Redirect back with error message
        return redirect()->back()->with('error', 'Unable to retrieve borrowed books');
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
