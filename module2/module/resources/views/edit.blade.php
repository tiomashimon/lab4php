<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Редагування даних студента</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body class="bg-gray-100 font-sans">
    <div class="container mx-auto my-8">
        <h1 class="text-3xl font-bold mb-4">Редагування даних студента</h1>
        <form method="POST" action="{{ route('students.update', $student->id) }}" class="max-w-md bg-white p-6 rounded-md shadow-md">
            @csrf
            @method('PUT')
            <label for="name" class="block mb-2">Ім'я:</label>
            <input type="text" name="name" value="{{ $student->name }}" class="w-full p-2 mb-4 border rounded-md" required>
            
            <label for="course" class="block mb-2">Курс:</label>
            <input type="number" name="course" value="{{ $student->course }}" class="w-full p-2 mb-4 border rounded-md" required>
            
            <label for="specialty" class="block mb-2">Спеціальність:</label>
            <input type="text" name="specialty" value="{{ $student->specialty }}" class="w-full p-2 mb-4 border rounded-md" required>
            
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md">Оновити</button>
        </form>
    </div>
</body>
</html>
