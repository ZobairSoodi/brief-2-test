<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
    <title>Laravel</title>
</head>

<body>
    <div class="cont">
        <form action="{{ route('insert-promotion') }}" method="POST">
            {{ csrf_field() }}
            <label>Nom: <input type="text" name="nom"></label>
            <input type="submit" name="add_promotion">
        </form>
    </div>
</body>

</html>
