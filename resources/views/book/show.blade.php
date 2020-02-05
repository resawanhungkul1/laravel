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
        <legend>Show Data</legend>
        Title: <b>{{$book->title}}</b><br>
        Publisher : <b>{{$book->publisher}}</b><br>
        Price : <b>{{$book->price}}</b><br>
        Page : <b>{{$book->pages}}</b><br>
        Synopsis : <b>{{$book->synopsis}}</b><br>
        Status : @if($book->status==1)
               <b> Premium <br>
                @else
                Pirated </b> <br>
               <b> @endif </b> <br>
        Date : {{$book->date}}
        
    </fieldset>
</body>
</html>