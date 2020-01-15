<?php

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
        \App\Buku::insert([
            [
                'judul'=>'Kisahku',
                'penerbit'=>'Hatiku',
                'pengarang'=>'Aku',
                'foto'=>'-',
                'created_at'=>date('Y-m-d H:i:s')
            ],
            [
                'judul'=>'Cintaku',
                'penerbit'=>'Kamu',
                'pengarang'=>'Dia',
                'foto'=>'-',
                'created_at'=>date('Y-m-d H:i:s')
            ],
            [
                'judul'=>'Kamu',
                'penerbit'=>'Buat aku tersipu',
                'pengarang'=>'Buatku malu malu',
                'foto'=>'-',
                'created_at'=>date('Y-m-d H:i:s')
            ],
            [
                'judul'=>'Bukumu',
                'penerbit'=>'Hehe',
                'pengarang'=>'Semua',
                'foto'=>'-',
                'created_at'=>date('Y-m-d H:i:s')
            ],
            [
                'judul'=>'Ayam',
                'penerbit'=>'Goreng',
                'pengarang'=>'Dua',
                'foto'=>'-',
                'created_at'=>date('Y-m-d H:i:s')
            ]
        ]);
    }
}
