        @extends('layouts.myapp')
        @section('title','Stident List')
        @section('content')
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
                            <button type="button" class="btn btn-danger btn-delete">DELETE</button>

                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{ $students->links('pagination::bootstrap-5') }}
        @endsection
