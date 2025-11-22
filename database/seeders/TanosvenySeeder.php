<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TanosvenySeeder extends Seeder
{
    public function run()
    {
        // --- 1. Nemzeti parkok ---
        $npFile = file(base_path('/storage/app/seed/np.txt'), FILE_IGNORE_NEW_LINES);

        array_shift($npFile);

        foreach ($npFile as $line) {
            [$id, $nev] = explode("\t", $line);

            DB::connection('tanosveny')
                ->table('np')
                ->insert([
                    'id' => $id,
                    'nev' => $nev
                ]);
        }

        // --- 2. Települések ---
        $telepulesFile = file(base_path('/storage/app/seed/telepules.txt'), FILE_IGNORE_NEW_LINES);

        array_shift($telepulesFile);

        foreach ($telepulesFile as $line) {
            [$id, $nev, $npid] = explode("\t", $line);

            DB::connection('tanosveny')
                ->table('telepules')
                ->insert([
                    'id' => $id,
                    'nev' => $nev,
                    'npid' => $npid
                ]);
        }

        // --- 3. Tanösvények ---
        $utFile = file(base_path('/storage/app/seed/ut.txt'), FILE_IGNORE_NEW_LINES);

        array_shift($utFile);

        foreach ($utFile as $line) {
            [$nev, $hossz, $allomas, $ido, $vezetes, $telepulesid] =
                explode("\t", $line);

              DB::connection('tanosveny')->table('ut')->insert([
        'nev' => $nev,
        'hossz' => str_replace(',', '.', $hossz),
        'allomas' => $allomas,
        'ido' => str_replace(',', '.', $ido),
        'vezetes' => $vezetes,
        'telepulesid' => $telepulesid,
    ]);
        }
    }

}
