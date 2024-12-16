<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <div>
        <form action="{{ route('authors.store') }}" method="POST">
            @csrf
            <label for="name">
                Nombre
            </label>
            <input type="text" name="author_name" id="name">
            <label for="nacionality">
                Nacionalidad
            </label>
            <input type="text" name="author_nationality" id="nacionality">
            <label for="birth_date">
                Fecha de nacimiento
            </label>
            <input type="date" name="author_birth_date" id="birth_date">
            <button type="submit">Guardar</button>
        </form>
    </div>

    <div>
        <table>
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Nacionalidad</th>
                    <th>Fecha de nacimiento</th>
                    <th>Opciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($authors as $author)
                    <tr>
                        <td>{{ $author->name }}</td>
                        <td>{{ $author->nationality }}</td>
                        <td>{{ $author->birth_date }}</td>
                        <td>
                            <a href="{{ route('authors.edit', $author->id) }}">Editar</a>
                            <form action="{{ route('authors.destroy', $author->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>

</html>
