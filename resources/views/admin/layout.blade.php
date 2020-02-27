<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
  
<nav>
  <a href="{{ action('AuthorController@create') }}">New Author</a>
</nav>
  
  {{ $title }}
  <!-- edit.blade'den geldi bu variable -->

  @yield("content")

</body>
</html>