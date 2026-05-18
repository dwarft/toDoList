<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <title>Document</title>
  <style>
    body {
      font-family: 'poppins', sans-serif;
    }
  </style>
</head>
<body>
  <div class="flex">
    @include('layouts.sidebar')

    <div class="p-5">
      @yield('content')
    </div>
  </div>
</body>
</html>