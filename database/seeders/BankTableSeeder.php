<?php

namespace Database\Seeders;

use App\Models\Bank;
use Illuminate\Database\Seeder;

class BankTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $banks = [
            ['kode_bank' => 'BCA', 'nama_bank' => 'BANK CENTRAL ASIA'],
            ['kode_bank' => 'BRI', 'nama_bank' => 'BANK REPUBLIK INDONESIA'],
            ['kode_bank' => 'BNI', 'nama_bank' => 'BANK NASIONAL INDONESIA'],
        ];

        foreach ($banks as $bank) {
            Bank::updateOrCreate(['kode_bank' => $bank['kode_bank']], $bank);
        }
    }
}
