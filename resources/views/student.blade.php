<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Student</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
  <div class="container mx-auto p-4">
    <h1 class="text-4xl font-bold text-center mb-6">All Students</h1>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
      @foreach ($students as $item)
        <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300">
          <p class="text-xl font-semibold mb-2">{{$item->Name}}</p>
          <p class="text-gray-700 mb-1">Age: {{$item->age}}</p>
          <p class="text-gray-700 mb-1">Department: {{$item->deparment}}</p>
          <p class="text-gray-700">Advisor ID: {{$item->advisor_id}}</p>
        </div>
      @endforeach
    </div>
  </div>
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      const cards = document.querySelectorAll('.shadow-md');
      cards.forEach(card => {
        card.addEventListener('mouseenter', function () {
          card.classList.add('ring', 'ring-indigo-300');
        });
        card.addEventListener('mouseleave', function () {
          card.classList.remove('ring', 'ring-indigo-300');
        });
      });
    });
  </script>
</body>
</html>
