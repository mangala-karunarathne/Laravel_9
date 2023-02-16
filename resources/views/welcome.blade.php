<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body>
    <div class="p-4 text-white bg-green-500 rounded-lg">
        No Pain No Gain
    </div>
    <div class="py-10 sm:py-20">
        <a class="primary-btn inline text-base sm:text-xl bg-green-500 py-4 px-4 shadow-xl rounded-full transition-all hover:bg-green-400"
            href="{{ route('blog.index') }}">
            Blog
        </a>
    </div>
    <div class="py-10 sm:py-20">
        <a class="uppercase mt-15 bg-blue-500 text-gray-100 text-lg font-extrabold py-4 px-8 rounded-3xl"
            href="{{ route('blog.filemanager') }}">
            File Manager
        </a>
    </div>
</body>

</html>
