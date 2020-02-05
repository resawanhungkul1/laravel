<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @foreach($pegawai as $latihan)
    @if($latihan['jabatan'] == 'manager')
        @php $a=500000;@endphp

     @elseif($latihan['jabatan'] == 'sekretaris')
        @php $a=35000;@endphp

     @elseif($latihan['jabatan'] == 'staff')
        @php $a=25000;@endphp

     @endif

     @if($latihan['jam kerja']>250)
            @php $bonus = 0.10*$a; @endphp
        @elseif($latihan['jam kerja']>200)
            @php $bonus = 0.05*$a; @endphp
        @else
            @php $bonus=0; @endphp
    @endif

    @php $ppn=0.025*$a;@endphp
    @php $gaber =($a+$bonus) - $ppn; @endphp   
    <br>
    Nama : {{$latihan['nama']}}.<br>
    nip  :{{$latihan['nip']}}.<br>
    jabatan :{{$latihan['jabatan']}}.<br>
    agama :{{$latihan['agama']}}.<br>
    jenis kelamin :{{$latihan['jk']}}.<br>
    jam kerja :{{$latihan['jam kerja']}}<br>
    Gaji :{{$a}}<br>
    Bonus :{{$bonus}}<br>
    ppn:{{$ppn}}<br>
    Gaji Bersih : {{$gaber}}
    <hr>
 @endforeach
</body>
</html>