<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
</head>

<body>
    <div>
        <h1>Edit Promotion</h1>
        <form action="{{ route('update-promotion') }}" method="POST">
            {{ csrf_field() }}
            <label>Nom: <input type="text" name="nom" value="{{ $data->nom }}"></label>
            <input type="hidden" name="id" value="{{ $data->id }}">
            <input type="submit" name="edit_promotion">
        </form>
    </div>
</body>

</html>
