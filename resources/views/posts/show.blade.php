
<!DOCTYPE html>
<html dir="ltr">

<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>POSTS</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css"rel="stylesheet" >

</head>

<body>

<div style="width: 900px"class="container max-w-full mx-auto pt-4 ">
   
    <article class="mb-2">

    <div class="border p-10">
    <h2  class="text-x1 font-bold text-blue-900">{{$post->title}}</h2>
    <hr class="mt-5">
    <p class="text-md text-gray-600">{{$post->content}}</p>
    <br class="mt-5">
    </div>
    </article>
    <a  href="/posts" class="bg-blue-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow">Go Back</a>
    <hr class="mt-5">
    
    <form method="post" action="/posts/{{$post->id}}/store">
    @csrf
    <label for="">comment</label>
    <textarea class="h-16 bg-white border border-gray-300 rounded py-4 px-3 mr-4 w-full text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus:ring-0" name="content" id="content" cols="5" rows="2"></textarea>
    <button  class=" bg-green-500 tracking-wide text-white px-6 py-2 inline mb-6 shadow-lg rounded hover:shadow" type="submit" >Add Comment</button>


    

    </form>
    
    <h2  style="margin-bottom:10px"  class="text-x1 font-bold text-blue-900">Comment</h2>
    
   

    @foreach ($post->comments as $comment)
       <p>  {{$comment->content}}</p>
      <hr class="mt-5">
      
    @endforeach
    
    </div> 

   

  
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/may.js"> </script>
  <!-- end mkan html -->
</body>

</html>