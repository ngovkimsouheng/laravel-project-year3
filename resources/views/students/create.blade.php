<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Create Student</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

</head>

<body>

  <div class="container">
    <h1 class="display-1">Create Student</h1>
    <form class="row g-3 needs-validation" method="POST" action="{{ route('students.store') }}">
      @csrf
      @method('post')
      <div class="col-6">
        <label for="nameText" class="form-label">Name</label>
        <input type="text" class="form-control" name="name" id="nameText" placeholder="Enter Name" required>
      </div>

      <div class="col-12">
        <button class="btn btn-primary" type="submit">SAVE</button>
      </div>
    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
  </script>
</body>

</html>
