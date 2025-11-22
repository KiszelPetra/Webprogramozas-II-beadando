<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class EnsureTanosvenyDatabase extends Command
{
    protected $signature = 'db:ensure-tanosveny';
    protected $description = 'Ensures the tanosveny database exists before migration';

    public function handle()
    {
        $dbName = env('TANOSVENY_DB_DATABASE', 'tanosveny');
        $charset = 'utf8mb4';
        $collation = 'utf8mb4_general_ci';

        DB::statement("CREATE DATABASE IF NOT EXISTS `$dbName` CHARACTER SET $charset COLLATE $collation;");

        $this->info("Database '$dbName' created or already exists.");
        return Command::SUCCESS;
    }
}
