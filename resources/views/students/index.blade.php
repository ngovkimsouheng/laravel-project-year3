<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Index</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

</head>

<body>

  <div class="container">
    <h1 class="display-1">Student Index</h1>
    <a href="{{ route('students.create') }}" class="btn btn-warning my-2">CREATE NEW</a>
    <table border="1px" class="table table-hover">
      <thead class="table-primary">
        <tr>
          <th>CID</th>
          <th>Name</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody class="table-light">
        @foreach ($students as $s)
        <tr>
          <td class="col-1">{{ $s->sid }}</td>
          <td>{{ $s->name }}</td>
          <td class="col-4">
            <a href="{{ route('students.edit', $s->sid) }}" class="btn btn-info">Edit</a>
            <form method="post" action="{{ route('students.destroy', $s->sid) }}" class="d-inline">
              @csrf
              @method('delete')
              <button type="submit" class="btn btn-danger">DELETE</button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
    {{ $students->links('pagination::bootstrap-5') }}
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
  </script>
</body>

</html>
