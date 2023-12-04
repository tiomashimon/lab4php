<!DOCTYPE html>
<html>
<head>
    <title>Developed by Tioma Shimon</title>
</head>
<body>
<nav>
    <ul>
        <li><a href="{{ route('news.index') }}">Список новин</a></li>
        <li><a href="{{ route('news.create') }}">Додати нову новину</a></li>
    </ul>
</nav>

<div>
    @yield('content')
</div>
</body>
</html>