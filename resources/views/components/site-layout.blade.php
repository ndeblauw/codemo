<!doctype html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
</head>
<body>
    <header class="bg-purple-600 text-purple-50 py-4">
        <div class="max-w-6xl mx-auto flex justify-between items-center">
            <div class="font-bold text-white text-xl uppercase">Codemo</div>
            <div>
                <a href="/articles">Articles</a>
                <a href="/authors">Authors</a>
            </div>
            <div>login</div>
        </div>
    </header>

    <div class="max-w-6xl mx-auto mt-8">
        {{$slot}}
    </div>

    <footer class="bg-purple-600 text-purple-50 py-4 mt-12">
        <div class="max-w-6xl mx-auto flex justify-between items-center">
        this is my footer
        </div>
    </footer>
</body>
</html>
