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

    <h1>INI HALAMAN FAQ</h1>

    {{-- FAQ baru --}}
    <table>
        <h1>Table FAQ</h1>
        <tr>
            <th>id</th>
            <th>question</th>
            <th>answer</th>
        </tr>
        @foreach ($faq as $key=>$value)
        <tr>
            <td>{{ $value->id  }}</td>
            <td>{{ $value->question  }}</td>
            <td>{{ $value->answer  }}</td>
        </tr>
        @endforeach
       
        
    </table>
    
    {{-- ahir FAQ --}}
</body>

</html>