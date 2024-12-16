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
        <form action="{{ route('authors.update', $author->id) }}" method="POST">
            @csrf
            @method('PUT')
            <label for="name">
                Nombre
            </label>
            <input type="text" name="author_name" id="name" value="{{ $author->name }}" required>
            <label for="nacionality">
                Nacionalidad
            </label>
            <input type="text" name="author_nationality" id="nacionality" value="{{ $author->nationality }}" required>
            <label for="birth_date">
                Fecha de nacimiento
            </label>
            <input type="date" name="author_birth_date" id="birth_date" value="{{ $author->birth_date }}" required>
            <button type="submit">Guardar</button>
        </form>
    </div>

</body>

</html>
