<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\Kelas::create([
            'nama' => "XI PPLG 1"
        ]);
        \App\Models\Kelas::create([
            'nama' => "XI PPLG 2"
        ]);
        \App\Models\Kelas::create([
            'nama' => "XI PPLG 3"
        ]);

    }
}
