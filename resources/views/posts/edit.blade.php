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
<div style="width: 900px;" class="container max-w-full mx-auto pt-4 text-center">
    <input method="POST" action="/posts/{{$post->id}}">
        @method('PUT')
        @csrf

        <div class="mb-4 text-center">

            <label class="font-bold text-gray-800" for="title">Title: </label>
        <input class="text-center h-10 bg-white border border-gray-300 rounded py-4 px-3 mr-4 w-full text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus:ring-0" id="title" name="title" value="{{$post->title}}">
        </div>

        <div class="mb-4 text-center">

            <label class="font-bold text-gray-800" for="Content">Content: </label>
            <textarea class="text-center h-16 bg-white border border-gray-300 rounded py-4 px-3 mr-4 w-full text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus:ring-0" id="Content" name="content" >{{$post->content}}</textarea>
        </div>

        <button type="submit" class="text-center bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
            Update
        </button>


    </form>
</div>
</body>
</html>
