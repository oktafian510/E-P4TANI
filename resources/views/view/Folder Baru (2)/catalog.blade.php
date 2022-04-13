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

    <h1>INI HALAMAN CataLOG</h1>

    
{{-- catalog baru --}}
<table>
    <h1>Table catalog</h1>
    <tr>
        <th>id</th>
        <th>title</th>
        <th>description</th>
        <th>image</th>
    </tr>
    @foreach ($catalog as $key=>$value)
    <tr>
        <td>{{ $value->code  }}</td>
        <td>{{ $value->name  }}</td>
        <td>{{ $value->descriptions  }}</td>
        <td>{{ $value->image  }}</td>
    </tr>
    @endforeach
   
    
</table>

{{-- ahir catalog --}}
</body>

</html>