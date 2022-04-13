<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    Halaman Utama
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HOME</title>
</head>
<body>

    @include('view.navbar')
  
{{-- iklann --}}
    <table>
        <h1>Table landing_pages</h1>
        <tr>
            <th>id</th>
            <th>title</th>
            <th>description</th>
            <th>image</th>
        </tr>
        @foreach ($landing_pages as $key=>$value)
        <tr>
            <td>{{ $value->id  }}</td>
            <td>{{ $value->title  }}</td>
            <td>{{ $value->description  }}</td>
            <td>{{ $value->image  }}</td>
        </tr>
        @endforeach
       
        
    </table>

{{-- ahir iklann --}}

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


{{-- footer --}}
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

{{-- ahir footer --}}
</body>
</html>
</body>
</html>