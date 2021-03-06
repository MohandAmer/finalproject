<!DOCTYPE html>
<html land="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Article</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css"rel="stylesheet" >
    </head>
    <body>


    
    <div style="width: 900px"class="mt-40 border container max-w-full mx-auto pt-4 p-10 ">
    
    
    <form method="POST" action="/posts/{{$post->id}}">
    @method('PUT')
    @csrf

    <div class="mb-4">
    <label class="font-bold text-gary-800" for="title">Title</label>
    <input class="h-10 bg-white border border-gray-300 rounded py-4 px-3 mr-4 w-full text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus:ring-0" type="text" name="title" id="title" value="{{$post->title}}">
    </div>

    <div class="mb-4">
    <label class="font-bold text-gary-800" for="content">Content</label>
    <textarea class="h-16 bg-white border border-gray-300 rounded py-4 px-3 mr-4 w-full text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus:ring-0" type="text" name="content"  id="content"  >{{$post->content}}</textarea>
    </div>
    <button class="bg-blue-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow">Update</button>
    <a  href="/posts" class="bg-gray-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow">Cancel</a>
    
    <br>
    </form>
    </div> 
    

    

    </body>

    </html>