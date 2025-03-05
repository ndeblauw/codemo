<x-site-layout>

    <form action="/admin/articles" method="post">

        @csrf

        <x-form-input label="Article title" name="title"/>

        <x-form-textarea label="Article content" name="content"/>

        <div>
            <button class="p-2 bg-gray-200" type="submit">Create article</button>
        </div>
    </form>

</x-site-layout>
