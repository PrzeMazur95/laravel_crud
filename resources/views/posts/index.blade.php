<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body>
<div class="text-center">
    <form action="/create">

        <button type="submit" class="text-center bg-transparent hover:bg-green-500 text-green-700 font-semi-bold hover:text-white py-2 px-4 border border-green-500 hover:border-transparent rounded">
            Create new post
        </button>

    </form>
</div>
<div style="width: 900px;" class="container max-w-full mx-auto pt-4">
    @foreach($posts as $post)
        <a href="/posts/{{$post->id}}">
            <article class="mb-4 text-center">
                <h2 class="text-x1 font-bold text-gray-900">{{$post->title}}</h2>
                <p class="text-md text-gray-600">{{$post->content}}</p>
            </article>
        </a>
    @endforeach
</div>
</body>
</html>
