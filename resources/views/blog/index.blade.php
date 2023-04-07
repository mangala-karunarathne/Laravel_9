<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>
        Laravel 9 Tutorial
    </title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
    @vite('resources/css/app.css')
</head>

<body class="w-full h-full bg-gray-100">
    <div class="w-4/5 mx-auto">
        <div class="pt-20 text-center">
            <h1 class="text-3xl text-gray-700">
                All Articles
            </h1>
            <hr class="mt-10 border border-gray-300 border-1">
        </div>

        <div class="py-10 sm:py-20">
            <a class="inline px-4 py-4 text-base transition-all bg-green-500 rounded-full shadow-xl primary-btn sm:text-xl hover:bg-green-400"
                href="{{ route('blog.create') }}">
                New Article
            </a>
            <span class="inline-block w-2"></span>

            <a class="inline px-4 py-4 text-base transition-all bg-green-500 rounded-full shadow-xl primary-btn sm:text-xl hover:bg-green-400"
                href="/">
                Home
            </a>

        </div>
    </div>
    @foreach ($posts as $post)
        <div class="w-4/5 pb-10 mx-auto">
            <div class="pt-10 pb-10 bg-white rounded-lg drop-shadow-2xl sm:basis-3/4 basis-full sm:mr-8 sm:pb-0">
                <div class="w-11/12 pb-10 mx-auto">
                    <h2 class="pt-6 pb-0 text-2xl font-bold text-gray-900 transition-all sm:pt-0 hover:text-gray-700">
                        <a href="{{ route('blog.show', $post->id) }}">
                            {{ $post->title }}
                            {{-- {{dd($post->title)}} --}}
                        </a>
                    </h2>
                    {{-- {{dd($posts)}} --}}
                    <p class="w-full py-8 text-lg text-gray-900 break-words">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa maiores nisi quasi tenetur
                        voluptatem! At blanditiis dolor doloremque eaque, esse molestiae neque numquam quod repellat
                        rerum
                        sequi sit suscipit veritatis!
                    </p>

                    <span class="text-sm text-gray-500 sm:text-base">
                        Made by:
                        <a href=""
                            class="pb-3 italic text-green-500 transition-all border-green-400 hover:text-green-400 hover:border-b-2">
                            Dary
                        </a>
                        on 13-07-2022
                    </span>
                    <a href="{{ route('blog.edit', $post->id)}}" class="block italic text-green-500 border-green-400 border-b-1 ">
                        Edit
                    </a>
                </div>
            </div>
        </div>
    @endforeach

</body>

</html>
