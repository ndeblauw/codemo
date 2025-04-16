<!doctype html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- uncomment the line below to use Vite, and comment the cdn import -->
    <!-- @vite(['resources/css/app.css', 'resources/js/app.js']) -->
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
</head>
<body>
    <x-site-layout-header/>

    <div class="max-w-6xl mx-auto mt-8">
        {{$slot}}
    </div>

    <x-site-layout-footer/>
</body>
</html>
