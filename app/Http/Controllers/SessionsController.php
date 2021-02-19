<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\TodoListsController;

class SessionsController extends Controller
{
    public function create()
    {
        return view('createView');
        
    }
    
    public function store()
    {
        if (auth()->attempt(request(['email', 'password'])) == false) {
            return back()->withErrors([
                'message' => 'The email or password is incorrect, please try again'
            ]);
            
        }
        return view('createView');
        
    }
    
    public function destroy()
    {
        auth()->logout();
        
        return view('login');
    }
}
