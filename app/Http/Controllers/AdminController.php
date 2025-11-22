<?php

namespace App\Http\Controllers;

use App\Models\User;

class AdminController extends Controller
{
    public function index()
    {
        $users = User::all(); // Összes felhasználó lekérése
        return view('admin', compact('users'));
    }
}
