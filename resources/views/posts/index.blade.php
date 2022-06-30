<!DOCTYPE html>
<html land="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Article</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css"rel="stylesheet" >
    </head>
    <body>


    <div style="width: 900px"class="container max-w-full mx-auto pt-4 ">
    <form method="POST" action="posts/store">
    {{ csrf_field()}}

    <a class="text-4xl font-bold mb-4 mr-96">Articles </a>
   

    <a href="/posts/create" class=" bg-blue-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow" >Create post</a>
    <hr class="mt-10">


    </form>

    
    
    
    

    @foreach ($posts as $post)
    <article class="mb-2">

    <h2 class="text-x1 font-bold inline mr-80  text-blue-900 mb-5">{{$post->title}}</h2>
    
    <form class="inline "  method="GET" action="/posts/{{$post->id}}">
        @csrf 
        @method('DELETE')
        <a href="/posts/{{$post->id}}/show" class="mr-3 mt-10 bg-blue-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow">show</a>
    <a class="mr-3 mt-10 bg-green-500 tracking-wide text-white px-6 py-2 inline mb-6 shadow-lg rounded hover:shadow" href="/posts/{{$post->id}}/edit">edit</a>

        <button class="mt-3 bg-red-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow" >Delete</button>
    </form>
    <hr class="mt-5">
    </article>
   
    @endforeach
    </div> 
    

    

    </body>

    </html>