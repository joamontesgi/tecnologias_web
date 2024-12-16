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
        <form action="{{ route('authors_books.store') }}" method="POST">
            @csrf
            <label for="author_id">Autor</label>
            <select name="author_id" id="author_id">
                @foreach ($authors as $author)
                    <option value="{{ $author->id }}">{{ $author->name }}</option>
                @endforeach
            </select>
            <label for="book_id">Libro</label>
            <select name="book_id" id="book_id">
                @foreach ($books as $book)
                    <option value="{{ $book->id }}">{{ $book->title }}</option>
                @endforeach
            </select>
            <button type="submit">Guardar</button>
        </form>
    </div>

    <div>
        <table>
            <thead>
                <tr>
                    <th>Autor</th>
                    <th>Libro</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($authorBooks as $authorBook)
                    <tr>
                        <td>{{ $authorBook->author_id }}</td>
                        <td>{{ $authorBook->book_id }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>



</body>
</html>
