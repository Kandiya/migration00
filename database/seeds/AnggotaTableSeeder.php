<?php

use Illuminate\Database\Seeder;

class AnggotaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Anggota::insert([
        [
            'nama_anggota'=>'Hendery Wong',
            'alamat'=>'Jalan Macau',
            'telp'=>'088880088880'
        ],
        [
            'nama_anggota'=>'Lucas Wong',
            'alamat'=>'Jalan perempatan hongkong thailand',
            'telp'=>'085580085580'
        ],
        [
            'nama_anggota'=>'Xiao Dejun',
            'alamat'=>'Jalan Guangdong',
            'telp'=>'2393929239'
        ],
        [
            'nama_anggota'=>'Liu Yangyang',
            'alamat'=>'Jalan China Jerman',
            'telp'=>'1234567890'
        ],
        [
            'nama_anggota'=>'Kandiya',
            'alamat'=>'Jalan S. Supriadi',
            'telp'=>'09393939399399'
        ]

        ]);
    }
}
