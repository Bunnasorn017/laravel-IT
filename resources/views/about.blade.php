<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>About Page</title>
</head>
<body>
  @foreach ($users as $user)
    {{$user->id}}
    {{$user->name}}
    {{$user->email}}
    {{$user->password}}
  @endforeach
</body>
</html>