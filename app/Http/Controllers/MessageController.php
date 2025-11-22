<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MessageController extends Controller
{
    /**
     * Üzenetek listázása (csak bejelentkezve)
     */
    public function index()
    {
        // Ha nincs bejelentkezve → átirányítás loginra
        if (!auth()->check()) {
            return redirect()->route('login')->with('error', 'Először be kell jelentkezned.');
        }

        // Üzenetek lekérése
        $kapcsolat = DB::table('kapcsolat')->orderBy('id', 'DESC')->get();

        return view('front.pages.message', compact('kapcsolat'));
    }

    /**
     * Új üzenet mentése
     */
    public function store(Request $request)
    {
        // Validáció
        $request->validate([
            'nev' => 'required|string|max:100',
            'uzenet' => 'required|string',
        ]);

        // Mentés
        DB::table('kapcsolat')->insert([
            'nev' => $request->nev,
            'uzenet' => $request->uzenet,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return back()->with('success', 'Üzenet elküldve!');
    }
}
