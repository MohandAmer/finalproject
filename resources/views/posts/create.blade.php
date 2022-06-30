<!DOCTYPE html>
<html land="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Article</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css"rel="stylesheet" >
    </head>
    <body>
    

    <div style="width: 900px "class="mt-40 border container max-w-full mx-auto  p-10 ">
    
    <h2 class="font-bold text-gary-800">Create Post</h2>
    <form method="POST" action="/posts">
    
    @csrf

    <div class="mb-4">
    
    <br>
    <label class="font-bold text-gary-800" for="title">Title</label>
    <input class="h-10 bg-white border border-gray-300 rounded py-4 px-3 mr-4 w-full text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus:ring-0" type="text" name="title" id="title" >
    </div>

    <div class="mb-4">
    <label class="font-bold text-gary-800" for="content">Content</label>
    <textarea class="h-16 bg-white border border-gray-300 rounded py-4 px-3 mr-4 w-full text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus:ring-0" type="text" name="content"  id="content"  ></textarea>
    </div>
    <button class="bg-blue-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow">Create</button>
    <a  href="/posts" class="bg-green-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow">Go Back</a>

    </form>
    </div> 
    

    

    </body>

    </html>