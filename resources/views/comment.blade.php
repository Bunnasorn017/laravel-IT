<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Comment</title>
</head>
<body>
  <div class="container">
    <h1>ALL COMMENT</h1>
    @foreach ($comments as $item)
        <h3>{{$item->title}}</h3>
        <p>{{$item->comment}}</p>
    @endforeach
  </div>
</body>
</html>