<x-site-layout>

    <x-form action="/admin/articles" method="post" submittext="create article">

        <x-form-input label="Article title" name="title"/>
        <x-form-textarea label="Article content" name="content"/>

    </x-form>

</x-site-layout>
