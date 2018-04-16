<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
      <body>

<h1>Insert a book</h1>

        <form action="{{ url('books/create') }}" method="post">

          {{ csrf_field() }}
          Titol del llibre:
          <input type="text" name="title" /></br>
          ISBN del llibre:
          <input type="number" name="ISBN"/></br>
          <input type="submit" value="Crear Llibre"/>

        </form>

        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

      </body>
</html>
