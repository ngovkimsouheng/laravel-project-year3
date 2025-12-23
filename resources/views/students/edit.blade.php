  @extends('layouts.myapp')
  @section('title','Edit Student ')
  @section('content')
  <form class="row g-3 needs-validation" method="POST" action="{{ route('students.update', $student->sid) }}">
      @csrf
      @method('put')
      <div class="col-6">
          <label for="nameText" class="form-label">Name</label>
          <input type="text" class="form-control" name="name" value="{{ $student->name }}" id="nameText" placeholder="Enter Name" required>
      </div>

      <div class="col-12">
          <button class="btn btn-primary" type="submit">UPDATE</button>
      </div>
  </form>
  @endsection
