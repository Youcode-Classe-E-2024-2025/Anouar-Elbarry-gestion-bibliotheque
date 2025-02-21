<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Borrow;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class ProfileController extends Controller
{
    public function index()
    {
        try {
            // Get the authenticated user
            $user = Auth::user();
    
            // Fetch user's borrowed books
            $borrows = Borrow::where('user_id', $user->id)
                ->with('book')
                ->latest('borrow_date')
                ->take(3) // Limit to last 3 borrowed books
                ->get();
    
            return view('front.profile', compact('user', 'borrows'));
        } catch (\Exception $e) {
            \Log::error('Error retrieving profile information', [
                'user_id' => Auth::id(),
                'error' => $e->getMessage()
            ]);
    
            return back()->with('error', 'Unable to load profile information');
        }
    }
}
