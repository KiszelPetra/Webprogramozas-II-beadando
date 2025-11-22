<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class TanosvenyController extends Controller
{
    public function index()
    {
        $adatok = DB::connection('tanosveny')
            ->table('ut')
            ->join('telepules', 'ut.telepulesid', '=', 'telepules.id')
            ->join('np', 'telepules.npid', '=', 'np.id')
            ->select(
                'ut.nev as ut_nev',
                'ut.hossz',
                'ut.allomas',
                'ut.ido',
                'ut.vezetes',
                'telepules.nev as telepules_nev',
                'np.nev as np_nev'
            )
            ->orderBy('ut.nev')
            ->get();

        return view('front.pages.database-table', compact('adatok'));
    }
}
