<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class RegisterUserController extends Controller
{
    public function create() {
        return view('auth.register');
    }
    public function store() {
        $attributes = request()->validate([
            'name'=>'required',
            'email'=>'required|email',
            'password'=>'required|min:8|confirmed',
        ]);

        $user = User::create($attributes);
        Auth::login($user);
        return redirect('/movies');
    }
}
