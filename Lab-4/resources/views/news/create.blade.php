@extends('news/layout')
@extends('layouts/navigation')
@section('content')
    <!DOCTYPE html>
<html>
<head>
    <title>Створення новини</title>
</head>
<body>
<h1>Створення новини</h1>
<form method="POST" action="{{ route('news.store') }}">
    @csrf
    <label for="title">Заголовок:</label>
    <input type="text" id="title" name="title" required>
    <br>
    <label for="short_description">Короткий опис:</label>
    <textarea id="short_description" name="short_description" required></textarea>
    <br>
    <label for="content">Зміст:</label>
    <textarea id="content" name="content" required></textarea>
    <br>
    <label for="publication_date">Дата публікації:</label>
    <input type="date" id="publication_date" name="publication_date" required>
    <br>
    <button type="submit">Зберегти</button>
</form>
</body>
</html>

@endsection