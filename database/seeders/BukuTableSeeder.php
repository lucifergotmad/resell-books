<?php

namespace Database\Seeders;

use App\Models\Buku;
use Illuminate\Database\Seeder;

class BukuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $books = [
            ['kode_buku' => 'NB-220101', 'judul_buku' => 'Laskar Pelangi', 'pengarang' => 'Andrea Hirata', 'berat' => 10.10, 'harga_jual' => 75999, 'harga_sewa' => 2000, 'kode_kategori' => 'Hiburan', 'penerbit' => 'Gramedia', 'tahun_terbit' => '2016'],
        ];

        foreach ($books as $book) {
            Buku::updateOrCreate(['kode_buku' => $book['kode_buku']], $book);
        }
    }
}
