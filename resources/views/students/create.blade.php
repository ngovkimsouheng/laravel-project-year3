  @extends('layouts.myapp')
  @section('title','Create Student ')
  @section('content')
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
  @endsection
