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
<div style="width: 900px;" class="container max-w-full mx-auto pt-4">
            <article class="mb-4 text-center">
                <h2 class="text-x1 font-bold text-gray-900">{{$post->title}}</h2>
                <p class="text-md text-gray-600">{{$post->content}}</p>
            </article>
    <form action="/posts/{{$post->id}}/edit" class="text-center">
        <button type="submit" class="text-center bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
            Edit
        </button>
    </form>

</div>
</body>
</html>
