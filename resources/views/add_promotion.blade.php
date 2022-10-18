<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
    </head>
    <body>
        <form action="{{ route('insert-promotion') }}" method="POST">
            {{csrf_field()}}
            <label>Nom: <input type="text" name="nom"></label>
            <input type="submit" name="add_promotion">
        </form>
    </body>
</html>
