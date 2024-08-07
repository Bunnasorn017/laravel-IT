<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Login-page</title>
</head>

<body class="m-3 bg-gray-100 flex items-center justify-center min-h-screen">
    <form action="{{ route('login.submit') }}" method="post" class="bg-white p-6 rounded shadow-md w-full max-w-md">
        <img src="login.gif" alt="image" class="bg-cover bg-center]">

        @csrf

        <div class="mb-4">
            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
            <input type="email" name="email" id="email"
                class="mt-1 block w-full px-3 py-2 border rounded-md text-sm text-gray-700 placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500"
                placeholder="Enter your email">
                @error('email')
                    <span class="text text-danger">
                        {{$message}}
                    </span>
                @enderror
        </div>

        <div class="mb-4">
            <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
            <input type="password" name="password" id="password"
                class="mt-1 block w-full px-3 py-2 border rounded-md text-sm text-gray-700 placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500"
                placeholder="Enter your password">
                @error('password')
                    <span class="text text-danger">
                        {{$message}}
                    </span>
                @enderror
        </div>

        <button type="submit"
            class="w-full py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Login</button>

    </form>
</body>

</body>


</html>
