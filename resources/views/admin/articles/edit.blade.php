<x-site-layout>

    <x-form action="/admin/articles/{{$article->id}}" method="put" submittext="save changes">

        <x-form-input label="Article title" name="title" :value="$article->title" />
        <x-form-textarea label="Article content" name="content" :value="$article->content"/>

        <input type="file" name="image">

    </x-form>

</x-site-layout>
