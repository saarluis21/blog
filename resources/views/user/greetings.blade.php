<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
      <body>

        @if (count($records) === 1)
          <h1>I have one record!</h1>
        @elseif (count($records) > 1)
          <h1>I have multiple records!</h1>
        @else
          <h1>I don't have any records!</h1>
        @endif

        <ul>

        @foreach($records as $record)

        <li> {{$record}} </li>

        @endforeach

        </ul>

      </body>
</html>
