@extends('news/layout')
@extends('layouts/navigation')
@section('content')
    <!DOCTYPE html>
<html>
<head>
    <title>Редагування новини</title>
</head>
<body>
<h1>Редагування новини</h1>
<form method="POST" action="{{ route('news.update', $news->id) }}">
    @csrf
    @method('PUT')
    <label for="title">Заголовок:</label>
    <input type="text" id="title" name="title" value="{{ $news->title }}" required>
    <br>
    <label for="short_description">Короткий опис:</label>
    <textarea id="short_description" name="short_description" required>{{ $news->short_description }}</textarea>
    <br>
    <label for="content">Зміст:</label>
    <textarea id="content" name="content" required>{{ $news->content }}</textarea>
    <br>
    <label for="publication_date">Дата публікації:</label>
    <input type="date" id="publication_date" name="publication_date" value="{{ $news->publication_date }}" required>
    <br>
    <button type="submit">Оновити</button>
</form>
</body>
</html>

@endsection