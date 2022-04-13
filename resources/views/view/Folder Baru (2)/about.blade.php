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
    

    <h1>INI HALAMAN About</h1>
        {{-- ABOUT baru --}}
        <table>
            <h1>Table about footer</h1>
            <tr>
                <th>ig</th>
                <th>hp</th>
                <th>yt</th>
                <th>fb</th>
            </tr>
            @foreach ($about as $key=>$value)
            <tr>
                <td>{{ $value->ig  }}</td>
                <td>{{ $value->hp  }}</td>
                <td>{{ $value->yt  }}</td>
                <td>{{ $value->fb  }}</td>
            </tr>
            @endforeach
           
            
        </table>
        
        {{-- ahir ABOUT --}}
</body>

</html>