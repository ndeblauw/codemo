<x-site-layout>
    @if($article->sponsored === false)
        <a href="{{ route('articles.sponsor', $article) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mb-4 inline-block">
            SPONSOR THIS ARTICLE
        </a>
    @else
        <div class="text-green-500 ">
            THIS ARTICLE IS ALREADY SPONSORED
        </div>
    @endif

    <h1 class="text-4xl font-bold">{{$article->title}}</h1>
    <h2 class="text-xl mt-2">Written by <span class="font-semibold">{{$article->author->name}}</span></h2>

    @if($article->media->first() )
        <img src="{{$article->media->first()->getUrl()}}" class="w-40 h-40 mt-4">
    @endif

    <p class="mt-4">
        {{$article->content}}
    </p>
</x-site-layout>
