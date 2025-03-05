<x-site-layout>

    <form action="/admin/articles/{{$article->id}}" method="post">

        @csrf
        @method('PUT')

        <x-form-input label="Article title" name="title" :value="$article->title" />

        <x-form-textarea label="Article content" name="content" :value="$article->content"/>

        <div>
            <button class="p-2 bg-gray-200" type="submit">Save changes</button>
        </div>
    </form>

</x-site-layout>
