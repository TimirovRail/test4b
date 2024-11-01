<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notice;

class AuthController extends Controller
{
    public function index(){
        $notices = Notice::all();
        return view('notice.index', compact('notices'));
    }

    public function register(){
        return view('auth.register');
    }

    public function login(){
        return view('auth.login');
    }
    public function create(){
        return view('notice.create');
    }

    public function store(Request $request){
        $request->validate([
            'name' =>'required',
            'text' =>'required',
        ]);
        Notice::create([
            'name' => $request->name,
            'text' => $request->text,
            'contact' => $request->contact,
        ]);
        return redirect()->route('notice.index');
    }
    public function Authenticate(Request $request){
        $request->validate([
            'email' =>'required',
            'password' => '<PASSWORD>',
        ]);
        $credentials = $request->only('email', 'password');
        if(auth()->attempt($credentials)){
            return redirect()->route('notice.index');
        }
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }
    public function logout(){
        auth()->logout();
        return redirect()->route('notice.index');
    }
    
}