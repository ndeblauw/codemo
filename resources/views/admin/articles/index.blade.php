<x-site-layout>

    <h1>ARticle management</h1>

    <div>
        <a href="/admin/articles/create">CREATE NEW</a>

    </div>

    <ul>
        @foreach($articles as $article)
            <li class="flex gap-x-4">
                {{$article->title}}
                <a class="p-1 bg-gray-200" href="/admin/articles/{{$article->id}}/edit">edit</a>

                <form action="/admin/articles/{{$article->id}}" method="post">
                    @method('DELETE')
                    @csrf
                    <button class="p-1 bg-gray-200" type="submit">delete</button>
                </form>
            </li>
        @endforeach
    </ul>

</x-site-layout>
