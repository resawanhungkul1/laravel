<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <center>List Book</center>
    <table border="1">
        <thead>
            <tr>
                <th>Title</th>
                <th>Publisher</th>
                <th>Pages</th>
                <th>Action</th>
            </tr>    
        </thead>
        <tbody>
            @foreach($book as $data)
            <tr>
                <td>{{$data->title}}</td>
                <td>{{$data->publisher}}</td>
                <td>{{$data->pages}}</td>
                <td><a href="/buku/{{$data->id}}">Show</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>    
</body>
</html>