<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Promotion List</title>
        <style>
            td{
                padding: 5px 10px;
            }
        </style>
    </head>
    <body>

        <div>
            <a href="{{ route('insert-promotion') }}">Ajouter Promotion</a>
        </div>
        
        <table>
            <thead>
                <th>Nom</th>
                <th>Action</th>
            </thead>
            <tbody>
            @foreach ($data as $row)
                <tr>
                    <td> <a href="/promotions/{{ $row->id }}/apprenants">{{ $row->nom }}</a> </td>
                    <td>
                        <a href="{{ route('edit-promotion') }}?id={{ $row->id }}">Edit</a> 
                        <a href="{{ route('delete-promotion') }}?id={{ $row->id }}">Delete</a>
                    </td>
                </tr>
            @endforeach
                
            </tbody>
        </table>
    </body>
</html>
