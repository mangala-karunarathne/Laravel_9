<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @vite('resources/css/app.css')
</head>

<body>
    <div class="w-4/5 mx-auto">
        <div class="pt-20 text-center">
            <h1 class="text-3xl text-gray-700">
                Edit:{{ $post->title }}
            </h1>
            <hr class="mt-10 border border-gray-300 border-1">
        </div>

        <div class="pt-20 m-auto">
            <div class="pb-8">
                @if ($errors->any())
                    <div class="px-4 py-2 font-bold text-white bg-red-500 rounded-t">
                        Something Went Wrong.....
                    </div>
                    <ul class="px-4 py-3 text-red-100 bg-red-700 border border-t-0 border-red-400 rounded-b">
                        @foreach ($errors->all() as $error)
                            <li>
                                {{ $error }}
                            </li>
                        @endforeach
                    </ul>

                @endif
            </div>
            <form action="{{ route('blog.update', $post->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <label for="is_published" class="text-2xl text-gray-500">
                    Is Published
                    {{-- {{ route('blog.store') }} --}}
                </label>
                <input type="checkbox" {{ $post->is_published === true ? 'checked' : '' }}
                    class="block inline text-2xl bg-transparent border-b-2 outline-none" name="is_published">

                <input type="text" name="title" value="{{ $post->title }}"
                    class="block w-full h-20 text-2xl bg-transparent border-b-2 outline-none">

                <input type="text" name="excerpt" value="{{ $post->excerpt }}"
                    class="block w-full h-20 text-2xl bg-transparent border-b-2 outline-none">

                <input type="number" name="min_to_read" value="{{ $post->min_to_read }}"
                    class="block w-full h-20 text-2xl bg-transparent border-b-2 outline-none">

                <textarea name="body" class="block w-full py-20 text-xl bg-transparent border-b-2 outline-none h-60">{{ $post->body }}</textarea>

                <div class="py-10 bg-grey-lighter">
                    <label
                        class="flex flex-col items-center px-2 py-3 tracking-wide uppercase border shadow-lg cursor-pointer w-44 bg-white-rounded-lg border-blue">
                        <span class="mt-2 text-base leading-normal">
                            Select a file
                        </span>
                        <input type="file" name="image_path" class="hidden">
                    </label>
                </div>

                <button type="submit"
                    class="px-8 py-4 text-lg font-extrabold text-gray-100 uppercase bg-blue-500 mt-15 rounded-3xl">
                    Submit Post
                </button>
            </form>
        </div>
</body>

</html>
