<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
      <body>

<h1>List of all Books</h1>

        @foreach ($books as $book)
            <h3>· {{ $book->title }}</h3>
        @endforeach

      </body>
</html>
