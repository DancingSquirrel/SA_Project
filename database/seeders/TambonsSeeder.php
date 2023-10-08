<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tambon;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\MySqlConnection;

class TambonsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Tambon::unguard();
        $tambonsPath = public_path('assets/sql/tambons.sql');
        DB::unprepared(file_get_contents($tambonsPath));
    }
        

}