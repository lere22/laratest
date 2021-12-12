<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    // Tampil register
    public function index() {
        return view('register.index', [
            'title' => 'Register',
            'active' => 'register'
        ]);
    }

    // Save Registrasi
    public function store(Request $request) {
        $data = $request->validate([
            'name' => 'required|max:255',
            'username' => ['required', 'min:3', 'max:255', 'unique:users'],
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255'
        ]);

        // $data['password'] = bcrypt($data['password']);
        $data['password'] = Hash::make($data['password']);

        User::create($data);

        // $request->session()->flash('sukses', 'Registerasi Berhasil!');
        return redirect('/login')->with('sukses', 'Registerasi Berhasil!');
    }
}
