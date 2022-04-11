<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @include('view.navbar')

    <h1>INI HALAMAN ARTICLE</h1>
     {{-- article baru --}}
     <table>
        <h1>Table article</h1>
        <tr>
            <th>id</th>
            <th>title</th>
            <th>description</th>
            <th>image</th>
        </tr>
        @foreach ($article as $key=>$value)
        <tr>
            <td>{{ $value->id  }}</td>
            <td>{{ $value->title  }}</td>
            <td>{{ $value->description  }}</td>
            <td>{{ $value->image  }}</td>
        </tr>
        @endforeach
       
        
    </table>
    {{-- ahir article --}}
</body>
</html>