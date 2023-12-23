<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Список студентів</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body class="bg-gray-100 font-sans">
    <div class="container mx-auto my-8">
        <h1 class="text-3xl font-bold mb-4">Список студентів</h1>
        <ul class="list-disc pl-4">
            @foreach($students as $student)
                <li class="mb-2">
                    <a href="{{ route('students.edit', $student->id) }}" class="text-blue-500 hover:underline">{{ $student->name }}</a>
                </li>
            @endforeach
        </ul>
    </div>
</body>
</html>
