<?php

namespace Database\Seeders;

use App\Models\Bank;
use App\Models\Rekening;
use App\Models\User;
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
        User::factory(3)->create();
        Rekening::factory(3)->create();
    }
}
