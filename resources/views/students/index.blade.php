@extends('students.layout')
@section('content')

<div class="pull-left">
        <h2>Student Crude</h2>
    </div>
    <div class="row">
        <div class="col-lg-12 margin-tb">
        
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('students.create') }}">Create New Student</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-success">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Matricule</th>
            <th>Level</th>
            <th>Option</th>
            <th width="280px">Action</th>
        </tr>
        @foreach($students as $student)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $student->name }}</td>
            <td>{{ $student->matricule }}</td>
            <td>{{ $student->level }}</td>
            <td>{{ $student->option }}</td>
            <td>
                <form action="{{ route('students.destroy',$student->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('students.show',$student->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('students.edit',$student->id) }}">Edit</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

@endsection