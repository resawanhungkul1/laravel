<?php

use Illuminate\Database\Seeder;

class PenggajianTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post=[['nama'=>'resawan','jabatan'=>'DKM','jenis_kelamin'=>'laki-laki','alamat'=>'bandung','agama'=>'islam','total_gaji'=>'5jt'],
             ['nama'=>'boa','jabatan'=>'assisten DKM','jenis_kelamin'=>'laki-laki','alamat'=>'bandung','agama'=>'islam','total_gaji'=>'4jt'],
             ['nama'=>'al','jabatan'=>'humas','jenis_kelamin'=>'laki-laki','alamat'=>'bandung','agama'=>'islam','total_gaji'=>'3jt'],
             ['nama'=>'ucup','jabatan'=>'Marbot','jenis_kelamin'=>'laki-laki','alamat'=>'bandung','agama'=>'islam','total_gaji'=>'2jt'],
             ['nama'=>'ujang','jabatan'=>'OB','jenis_kelamin'=>'laki-laki','alamat'=>'bandung','agama'=>'islam','total_gaji'=>'1jt']
             
             
    ];
    DB::table('penggajians')->insert($post);
    }
}
