@extends('news/layout')

@section('content')
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>{{ $news->title }}</title>
        <link rel="stylesheet" href="{{ asset('css/tailwind.css') }}">
    </head>
    <body class="font-sans bg-gray-100">
        <div class="container mx-auto my-8">
            <h1 class="text-3xl font-bold mb-4">{{ $news->title }}</h1>
            <p class="mb-2"><strong>Короткий опис:</strong> {{ $news->short_description }}</p>
            <p class="mb-2"><strong>Зміст:</strong> {{ $news->content }}</p>
            <p class="mb-2"><strong>Дата публікації:</strong> {{ $news->publication_date }}</p>
            <a href="{{ route('news.index') }}" class="text-blue-500 hover:underline">Назад до списку новин</a>
            <a href="{{ route('news.edit', $news->id) }}" class="ml-4 text-blue-500 hover:underline">Редагувати новину</a>
        </div>
    </body>
    </html>
@endsection