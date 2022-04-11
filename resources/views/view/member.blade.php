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


    <h1>INI HALAMAN ANGGOTA MEMBER</h1>

    {{-- MEMBER baru --}}
    <table>
        <h1>Table MEMBER</h1>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>descriptions</th>
        </tr>
        @foreach ($member as $key=>$value)
        <tr>
            <td>{{ $value->id  }}</td>
            <td>{{ $value->name  }}</td>
            <td>{{ $value->description  }}</td>
        </tr>
        @endforeach
       
        
    </table>
    
    {{-- ahir MEMBER --}}
</body>

</html>