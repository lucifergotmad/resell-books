<?php

namespace Database\Seeders;

use App\Models\Kategori;
use Illuminate\Database\Seeder;

class KategoriTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            ['kode_kategori' => '001', 'nama_kategori' => 'Pendidikan'],
            ['kode_kategori' => '002', 'nama_kategori' => 'Kesehatan'],
            ['kode_kategori' => '003', 'nama_kategori' => 'Hiburan'],
            ['kode_kategori' => '004', 'nama_kategori' => 'Misteri'],
            ['kode_kategori' => '005', 'nama_kategori' => 'Berita']
        ];

        foreach($categories as $category) {
            Kategori::updateOrCreate(['kode_kategori' => $category['kode_kategori']], $category);
        }

    }
}
