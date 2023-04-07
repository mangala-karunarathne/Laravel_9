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
        <a class="inline px-4 py-4 text-base transition-all bg-green-500 rounded-full shadow-xl primary-btn sm:text-xl hover:bg-green-400"
            href="{{ route('blog.index') }}">
            Blog
        </a>
    </div>
    <div class="py-10 sm:py-20">
        <a class="px-8 py-4 text-lg font-extrabold text-gray-100 uppercase bg-blue-500 mt-15 rounded-3xl"
            href="{{ route('filemanager') }}">
            File Manager
        </a>
    </div>
    {{-- <div class="flex flex-row justify-between">
        <div class="p-4 text-white bg-green-500 rounded-lg">
            No Pain No Gain
        </div>
        <div class="py-10 sm:py-20">
            <a class="inline px-4 py-4 text-base transition-all bg-green-500 rounded-full shadow-xl primary-btn sm:text-xl hover:bg-green-400"
                href="{{ route('blog.index') }}">
                Blog
            </a>
        </div>
        <div class="py-10 sm:py-20">
            <a class="px-8 py-4 text-lg font-extrabold text-gray-100 uppercase bg-blue-500 mt-15 rounded-3xl"
                href="{{ route('filemanager') }}">
                File Manager
            </a>
        </div>
    </div> --}}

</body>

</html>
