<x-site-layout>
    <h1 class="font-bold text-4xl">Latest articles</h1>

    <div class="grid grid-cols-3 gap-x-8">
        <ul class="col-span-2 gap-12 mt-12 ">
            @foreach($latest_articles as $article)
                <li class="hover:bg-purple-50 p-2 border-t-2 border-black">
                    <a class="" href="/articles/{{$article->id}}">
                        <h2 class="text-2xl font-bold">{{ $article->title }}</h2>
                        <p class="line-clamp-3">{{$article->content}}</p>
                    </a>
                </li>
            @endforeach
        </ul>

        <div>
            <div class="bg-purple-50 rounded-lg p-4">
                <div class="italic">{{$quote->quote}}</div>
                <div class="text-sm mt-2">{{$quote->author}}</div>
            </div>
        </div>
    </div>

</x-site-layout>
