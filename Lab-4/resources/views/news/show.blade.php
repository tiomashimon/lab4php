@extends('news/layout')

@section('content')
    <!DOCTYPE html>
<html>
<head>
    <title>{{ $news->title }}</title>
</head>
<body>
<h1>{{ $news->title }}</h1>
<p><strong>Короткий опис:</strong> {{ $news->short_description }}</p>
<p><strong>Зміст:</strong> {{ $news->content }}</p>
<p><strong>Дата публікації:</strong> {{ $news->publication_date }}</p>
<a href="{{ route('news.index') }}">Назад до списку новин</a>
<a href="{{ route('news.edit', $news->id) }}">Редагувати новину</a>
</body>
</html>
@endsection