<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class RunSqlFile extends Command
{
    protected $signature = 'sql:run {file}';
    protected $description = 'Run SQL file';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $file = $this->argument('file');
        $path = database_path("sql/{$file}");

        if (File::exists($path)) {
            DB::unprepared(File::get($path));
            $this->info("SQL file '{$file}' has been executed.");
        } else {
            $this->error("SQL file '{$file}' not found.");
        }
    }
}
