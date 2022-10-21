<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/955adab269.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
    <title>Laravel</title>
</head>

<body>
    <div class="cont">
        <h1>Edit Promotion</h1>
        <div>
            
            <form action="{{ route('update-promotion', ['id' => $data[0]->id_prom]) }}" method="POST">
                {{ csrf_field() }}
                <label>Nom: <input type="text" name="nom" value="{{ $data[0]->nom_prom }}"></label>
                <input type="hidden" name="id" value="{{ $data[0]->id_prom }}">
                <input type="submit" name="edit_promotion">
            </form>
        </div>
        <h3>Apprenants:</h3>
        <div>
            
            <div>
                <button id="add_appr">Ajouter Apprenant</button>
            </div>
            <table>
                <thead>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Email</th>
                    <th>Actions</th>
                </thead>
                <tbody>
                    @if ($data[0]->id_appr != null)
                        @foreach ($data as $row)
                            <tr>
                                <td>{{ $row->nom_appr }}</td>
                                <td>{{ $row->prenom }}</td>
                                <td>{{ $row->email }}</td>
                                <td>
                                    <a href="{{ route('edit_appr', ['id_appr' => $row->id_appr]) }}"> Edit </a>
                                    <a href="{{ route('delete_appr', ['id_appr' => $row->id_appr]) }}"> Delete </a>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>

        <form id="appr_form" action="{{ route('add_appr', ['id_prom' => $data[0]->id_prom]) }}" method="POST">
            {{ csrf_field() }}
            <div>
                <label><span>Nom: </span><input type="text" name="nom"></label>
                <label><span>Prenom: </span><input type="text" name="prenom"></label>
                <label><span>Email: </span><input type="text" name="email"></label>
                <input type="submit" name="submit">
                <i id="close_btn" class="fa-solid fa-circle-xmark"></i>
            </div>
        </form>
    </div>

    <script>
        let show_add = document.querySelector("#add_appr");
        let close_add = document.querySelector("#close_btn");
        let add_modal = document.querySelector("#appr_form");

        show_add.addEventListener("click", () => {
            add_modal.style.display = "flex";
            add_modal.style.zIndex = 10;
            add_modal.style.opacity = 1;
        })

        close_add.addEventListener("click", () => {
            add_modal.style.display = "none";
            add_modal.style.zIndex = -10;
            add_modal.style.opacity = 0;
        })
    </script>
</body>

</html>
