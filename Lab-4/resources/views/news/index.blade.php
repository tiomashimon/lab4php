@extends('news/layout')
@extends('layouts/navigation')
@section('content')
    <!DOCTYPE html>
<html>
<head>
    <title>Список новин</title>
</head>
<body>
<h1>Список новин</h1>
<ul>
    @foreach($news as $item)
        <li>
            <a href="{{ route('news.show', $item->id) }}">{{ $item->title }}</a>
        </li>
    @endforeach
</ul>
</body>
</html>

@endsection