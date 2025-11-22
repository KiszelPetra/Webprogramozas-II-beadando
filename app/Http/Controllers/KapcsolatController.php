<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KapcsolatController extends Controller
{
    public function store(Request $request)
    {
        // Validáció
        $request->validate([
            'nev' => 'required|string|max:100',
            'uzenet' => 'required|string',
        ]);

        // Mentés adatbázisba
        DB::table('kapcsolat')->insert([
            'nev' => $request->nev,
            'uzenet' => $request->uzenet,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        return back()->with('success', 'Üzenet sikeresen elküldve!');
    }
}

