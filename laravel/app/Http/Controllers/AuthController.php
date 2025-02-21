<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use function PHPUnit\Framework\returnArgument;

class AuthController extends Controller
{
    public function index(){
        return view('front.auth');
    }

    public function login(Request $request){
        try{
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }else{
            return back()
            ->withErrors('password or email are wrong');
        }

       
        }catch(ValidationException $e){
            return back()
            ->withErrors($e->validator)
            ->withInput();
        }
    }

    public function register(Request $request){
        try{
        $validatedData = $request->validate([
            'username' => 'required|string|max:255|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:8|confirmed'
        ]);
        $user = User::create([
            'username' => $validatedData['username'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password'])
        ]);

        Auth::login($user);

        return redirect('/');
    }catch (ValidationException $e) {
        // This will automatically redirect back with errors
        return back()
            ->withErrors($e->validator)  // Send validation errors
            ->withInput($request->except('password', 'password_confirmation'));  // Send back all input except passwords
    }
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/auth');
    } 
    
}
