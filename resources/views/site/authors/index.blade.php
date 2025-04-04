<x-site-layout>
    <h1 class="font-bold text-4xl">Overview of the authors</h1>

    <ul class="list-disc pl-4">
        @foreach($authors as $author)
            <li>
                <a class="underline" href="/authors/{{$author->id}}">{{ $author->name }}</a>
                ({{$author->articles_count}} articles)
            </li>
        @endforeach
    </ul>
</x-site-layout>
