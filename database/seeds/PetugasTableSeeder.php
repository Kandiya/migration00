<?php

use Illuminate\Database\Seeder;

class PetugasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Petugas::insert([
            [
                'nama_petugas'=>'Jeffrey Jung',
                'alamat'=>'Jalan Connecticut',
                'telp'=>'9292929292929',
                'username'=>'jaef00',
                'password'=>'akuganteng',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
            ],
            [
                'nama_petugas'=>'Johnny Suh',
                'alamat'=>'Jalan Chicago',
                'telp'=>'9292929292920',
                'username'=>'john00',
                'password'=>'gueganteng',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
            ],
            [
                'nama_petugas'=>'Mark Lee',
                'alamat'=>'Jalan Canada',
                'telp'=>'9292929292928',
                'username'=>'mark00',
                'password'=>'ganteng',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
            ],
            [
                'nama_petugas'=>'Jaemin Na',
                'alamat'=>'Jalan Hatiku',
                'telp'=>'9292929292922',
                'username'=>'jaem00',
                'password'=>'heiganteng',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
            ],
            [
                'nama_petugas'=>'Taeyong Lee',
                'alamat'=>'Jalan Seoul',
                'telp'=>'9292929292925',
                'username'=>'yong00',
                'password'=>'ganteng',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
            ]
        ]);
    }
}
