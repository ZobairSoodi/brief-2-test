@extends('base')

@section('style-link')
    <style>
        td {
            padding: 5px 10px;
        }
    </style>
@endsection

@section('content')
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
@endsection


@section('scripts')
    <script src="{{ URL::asset('js/index.js') }}"></script>
@endsection
