<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>All Posts</title>
</head>
<body>
  
  <div class="container text-center p-3 m-2">
    <h1>All Post</h1>

    @foreach ($posts as $post)
        <h3>{{$post->title}}</h3>                                                                      
        <p>{{$post->body}}</p>
    @endforeach
  </div>

</body>
</html>