<x-site-layout>
    <h1 class="font-bold text-4xl">Overview of the articles</h1>

    <ul class="list-disc pl-4">
        @foreach($articles as $article)
            <li><a class="underline" href="/articles/{{$article->id}}">{{ $article->title }}</a></li>
        @endforeach
    </ul>
</x-site-layout>
