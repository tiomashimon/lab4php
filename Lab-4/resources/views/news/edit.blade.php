@extends('news/layout')
@extends('layouts/navigation')
@section('content')
    <div class="container mx-auto mt-5">
        <h1 class="text-2xl font-semibold mb-4">Редагування новини</h1>
        <form method="POST" action="{{ route('news.update', $news->id) }}">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="title" class="block text-sm font-medium text-gray-600">Заголовок:</label>
                <input type="text" id="title" name="title" value="{{ $news->title }}" class="mt-1 p-2 border rounded w-full" required>
            </div>
            <div class="mb-4">
                <label for="short_description" class="block text-sm font-medium text-gray-600">Короткий опис:</label>
                <textarea id="short_description" name="short_description" class="mt-1 p-2 border rounded w-full" required>{{ $news->short_description }}</textarea>
            </div>
            <div class="mb-4">
                <label for="content" class="block text-sm font-medium text-gray-600">Зміст:</label>
                <textarea id="content" name="content" class="mt-1 p-2 border rounded w-full" required>{{ $news->content }}</textarea>
            </div>
            <div class="mb-4">
                <label for="publication_date" class="block text-sm font-medium text-gray-600">Дата публікації:</label>
                <input type="date" id="publication_date" name="publication_date" value="{{ $news->publication_date }}" class="mt-1 p-2 border rounded w-full" required>
            </div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Оновити</button>
        </form>
    </div>
@endsection