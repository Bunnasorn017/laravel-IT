<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Bootstrap demo</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="h-[100vh] justify-center flex items-center p-5">

    <div class="continer bg-slate-300 p-3 h-[300px] w-[300px] flex  flex-col items-center rounded-xl gap-3">
        <div class="bg-white py-3 px-2 rounded-md ">
            <h1>Hello World!</h1>
        </div>

        <div class="bg-white p-5 rounded-lg">
            <p>Name : {{ $users['name'] }}</p>
            <p>Email : {{ $users['email'] }}</p>
            <p>Phone : {{ $users['phone'] }}</p>
        </div>

        <button class="px-4 py-2 bg-teal-300 rounded-xl">Click Me!</button>
    </div>

</body>

</html>
