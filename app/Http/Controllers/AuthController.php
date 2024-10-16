<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    public function auth() {
        return view('auth');
    }

    public function registerProses(Request $request) {
        $name = $request->name;
        $email = $request->email;
        $password = Hash::make($request->password);

        User::create([
            'name' => $name,
            'email' => $email,
            'password' => $password
        ]);

        return redirect('/');
    }

    public function loginProses(Request $request) {
        $data = [
            'name' => $request->input('name'),
            'password' => $request->input('password'),
        ];

        if (Auth::attempt($data)) {
            return redirect('/');
        }else{
            return redirect('/');
        }
    }
}
