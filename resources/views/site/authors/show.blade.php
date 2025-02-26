<x-site-layout>
    <h1 class="text-4xl font-bold">{{$author->name}}</h1>

    <h2 class="text-2xl font-bold">List of articles:</h2>
    <ul class="list-disc pl-4">
        @foreach($author->articles as $article)
            <li><a class="underline" href="/articles/{{$article->id}}">{{ $article->title }}</a></li>
        @endforeach
    </ul>

</x-site-layout>
