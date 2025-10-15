<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Daftar Buku</title>
    <style>
        body {
            font-family: Segoe UI, Arial, sans-serif;
            margin: 24px;
            background: #f9fafb;
        }
        nav {
            margin-bottom: 20px;
        }
        nav a {
            text-decoration: none;
            color: #2563eb;
            font-weight: 500;
            margin-right: 20px;
            transition: 0.2s;
        }
        nav a:hover {
            text-decoration: underline;
        }
        nav a:visited {
            color: #2563eb; /* tetap biru meski sudah diklik */
        }
        h1 {
            margin-bottom: 20px;
        }
        table {
            border-collapse: collapse;
            width: 90%;
            background: #fff;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 3px 8px rgba(0,0,0,.08);
        }
        th, td {
            padding: 12px 16px;
            text-align: left;
        }
        thead {
            background: #2563eb;
            color: white;
        }
        tr:nth-child(even) {
            background: #f3f4f6;
        }
        tr:hover {
            background: #e0e7ff;
        }
    </style>
</head>
<body>
    <nav>
        <a href="{{ route('genres.index') }}">Genres</a>
        <a href="{{ route('authors.index') }}">Authors</a>
        <a href="{{ route('books.index') }}">Books</a>
    </nav>

    <h1>Daftar Buku</h1>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Judul</th>
                <th>Author</th>
                <th>Genre</th>
                <th>Tahun</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($books as $b)
                <tr>
                    <td>{{ $b->id }}</td>
                    <td>{{ $b->title }}</td>
                    <td>{{ $b->author->name ?? '-' }}</td>
                    <td>{{ $b->genre }}</td>
                    <td>{{ $b->published_year }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
