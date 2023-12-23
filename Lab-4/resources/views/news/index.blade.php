@section('content')
    <div class="container mx-auto mt-5">
        <h1 class="text-2xl font-semibold mb-4">Список новин</h1>
        <ul>
            @foreach($news as $item)
                <li class="mb-2">
                    <a href="{{ route('news.show', $item->id) }}" class="text-blue-500 hover:underline">{{ $item->title }}</a>
                </li>
            @endforeach
        </ul>
    </div>
@endsection