<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
    <title>Document</title>
</head>

<body>
    <div class="cont">
        <form action="{{ route('update_appr', ['id_appr' => $data[0]->id_appr]) }}" method="POST">
            {{ csrf_field() }}
            <label><span>Nom: </span><input type="text" name="nom" value="{{ $data[0]->nom_appr }}"></label>
            <label><span>Prenom: </span><input type="text" name="prenom" value="{{ $data[0]->prenom }}"></label>
            <label><span>Email: </span><input type="text" name="email" value="{{ $data[0]->email }}"></label>
            <select name="id_promo">
                @foreach ($prom as $row)
                    <option @if ($row->id == $data[0]->id_prom) selected @endif value="{{ $row->id }}">
                        {{ $row->nom }}</option>
                @endforeach
            </select>
            <input type="submit" name="submit">
        </form>
    </div>
</body>

</html>
