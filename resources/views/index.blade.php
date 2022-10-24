<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
    <title>Promotion List</title>
    <style>
        td {
            padding: 5px 10px;
        }
    </style>
</head>

<body>
    <div class="cont">
        <h1>Promotions:</h1>
        <div>
            <a href="{{ route('insert-promotion') }}">Ajouter Promotion</a>
            <input id="search_prom" type="text" placeholder="rechercher">
        </div>

        <table>
            <thead>
                <th>Nom</th>
                <th>Action</th>
            </thead>
            <tbody id="search_table">
                @foreach ($data as $row)
                    <tr>
                        <td>{{ $row->nom }}</td>
                        <td>
                            <a href="{{ route('edit-promotion', ['id' => $row->id]) }}">Edit</a>
                            <a href="{{ route('delete-promotion') }}?id={{ $row->id }}">Delete</a>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
    
    <script src="{{ URL::asset('js/index.js') }}"></script>
</body>

</html>
