<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <fieldset disabled="disabled">
        <legend>show table</legend>
        Nama : {{$barang->nama}}<br>
        Kode : {{$barang->kode}}<br>
        Harga : {{$barang->harga}}<br>
        foto : <img src="{{$barang->foto}}" alt="Mohon Bersabar">         
    </fieldset>
</body>
</html>