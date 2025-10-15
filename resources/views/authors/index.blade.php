<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"><title>Authors (DB)</title>
<style>
 body{font-family:'Segoe UI',Tahoma,Arial;background:#f9fafb;margin:0;padding:30px;color:#111827}
 nav{margin-bottom:24px}
 nav a{color:#2563eb;text-decoration:none;font-weight:500;margin-right:16px}
 nav a:hover{text-decoration:underline}
 h1{font-size:24px;margin-bottom:20px;color:#1f2937}
 table{border-collapse:collapse;width:70%;background:#fff;border-radius:10px;overflow:hidden;box-shadow:0 3px 8px rgba(0,0,0,.08)}
 thead{background:#2563eb;color:#fff}
 th,td{padding:12px 16px;text-align:left}
 tr:nth-child(even){background:#f3f4f6}
 tr:hover{background:#e0e7ff}
</style>
</head>
<body>
<nav>
  <a href="{{ route('genres.index') }}">Genres </a>
  <a href="{{ route('authors.index') }}">Authors </a>
  <a href="{{ route('books.index') }}">Books </a>
</nav>

<h1>Daftar Author</h1>
<table>
  <thead><tr><th>Nama</th><th>Negara</th><th>Jumlah Buku</th></tr></thead>
  <tbody>
  @foreach($authors as $a)
    <tr>
      <td>{{ $a->name }}</td>
      <td>{{ $a->country ?? '-' }}</td>
      <td>{{ $a->books_count }}</td>
    </tr>
  @endforeach
  </tbody>
</table>
</body>
</html>
