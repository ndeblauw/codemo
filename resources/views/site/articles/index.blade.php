<x-site-layout>
    <h1 class="font-bold text-4xl">Overview of the articles</h1>

    <ul class="grid grid-cols-3 gap-12 mt-12 ">
        @foreach($articles as $article)
            <li class="hover:bg-purple-50 p-2 border-t-2 border-black">
                <a class="" href="/articles/{{$article->id}}">
                    <h2 class="text-2xl font-bold">{{ $article->title }}</h2>
                    <p class="line-clamp-3">{{$article->content}}</p>
                </a>
            </li>
        @endforeach
    </ul>
</x-site-layout>
