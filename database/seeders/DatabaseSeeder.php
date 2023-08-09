<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
// Illuminate\Support\Facades\DB::class;
use  Illuminate\Support\Facades\DB;
// use App\Database\Seeders\ClassesTableSeeder;
use App\Models\Etudiant;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Etudiant::factory(30)->create();
        // \App\Models\User::factory(10)->create();
        // $this->call(ClassesTableSeeder::class);
    }
}
