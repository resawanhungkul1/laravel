<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PracticeController extends Controller
{
    public function pass()
    {
        $a="Aku Cinta Bandung";
        return view('latihan', compact('a'));
    }
    public function pass1()
    {
        $data=[
            ['nama'=>'Ucup','kelas'=>'10rpl2'],
            ['nama'=>'icup','kelas'=>'10rpl2'],
            ['nama'=>'acup','kelas'=>'10rpl2'],
        ];
        return view('latihan1',['siswa'=>$data]);
    }
    public function latihan()
    {
        $latihan=[
            ['nama'=>'resawan','nip'=>12345,'jabatan'=>'manager','agama'=>'islam','jk'=>'laki',
            'jam kerja'=>250],
            ['nama'=>'boa','nip'=>12345,'jabatan'=>'sekretaris','agama'=>'islam','jk'=>'laki',
            'jam kerja'=>210],
            ['nama'=>'ana','nip'=>12345,'jabatan'=>'staff','agama'=>'islam','jk'=>'laki',
            'jam kerja'=>250]
        ];
        return view('pegawai',['pegawai'=>$latihan]);
    }
}
