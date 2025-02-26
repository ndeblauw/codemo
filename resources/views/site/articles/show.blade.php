<x-site-layout>
    <h1 class="text-4xl font-bold">{{$article->title}}</h1>
    <h2 class="text-xl mt-2">Written by <span class="font-semibold">{{$article->author->name}}</span></h2>

    <p class="mt-4">
        {{$article->content}}
    </p>
</x-site-layout>
