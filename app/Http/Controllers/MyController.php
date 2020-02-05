<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function hallo()
    {
        return "hallo word ";
    }
    public function dunia()
    {
        return "word ";
    }
    public function sekolah()
    {
        return "assalam";
    }
    public function rumah()
    {
        return "di dunia ";
    }
    public function air()
    {
        return "basah ";
    }
    public function api()
    {
        return "panas ";
    }
    public function panas()
    {
        return "kebakaran ";
    }
    public function batu()
    {
        return "bacan ";
    }
    public function agama()
    {
        return "islam ";
    }
    public function kelas()
    {
        return "XI RPL 2 ";
    }
    public function kucing($warna=null)
    {
        if ($warna) {
            return 'warna kucing kamu '.$warna;
        }
        if (!$warna) {
            return "anda belum memilih warna kucing";
        }
    }
    public function beli($makan=null, $harga=null)
    {
        if (!$makan && !$harga) {
            return "silahkan masukan icon terlebih dahulu";
        }
        if ($makan) {
            echo 'anda mememsan '.$makan;
        } if (isset($harga)) {
        
        if ($harga>15000) {
            echo 'dengan ukuran jumbo';

        }if ($harga<15000 && $harga>7000) {
            echo 'dengan ukuran medium';

        }if ($harga<7000 && $harga>=1) {
            echo 'dengan ukuran small';

        }if ($harga<=1) {
            echo ' Anda memasukan harga yang salah';

        }
    
            
    }
    }
}