<header class="bg-purple-600 text-purple-50 py-4">
    <div class="max-w-6xl mx-auto flex justify-between items-center">
        <div class="font-bold text-white text-xl uppercase">Codemo</div>
        <ul class="flex gap-x-8">
            @foreach($menu as $label => $url)
                <li class="hover:font-bold"><a href="{{$url}}">{{$label}}</a></li>
            @endforeach
        </ul>
        @guest()
        <div>
            <a href="/login">login</a> | <a href="/register">register</a>
        </div>
        @endguest
        @auth()
            <div>
                <a href="/admin/articles">manage articles</a>
            </div>

            <span> {{ auth()->user()->name }}</span>
        @endauth
    </div>
</header>
