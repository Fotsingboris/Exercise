@extends('students.layout')
@section('content')


    <div class="row">
        <div class="col-lg-12 margin-tb">
        
            <div class="pull-left">
                <h2> Edit Product</h2>
            </div><div class="pull-left">
                <a class="btn btn-primary" href="{{ route('students.index') }}">Backt</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems in your input. <br><br>
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('students.update', $student->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class=row>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>StudentName</strong>
                    <input type="text" name="name" class="form-control" placeholder="name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Matricule</strong>
                    <input type="text" name="matricule" class="form-control" placeholder="namatriculrme">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Level</strong>
                    <input type="text" name="level" class="form-control" placeholder="level">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Option</strong>
                    <input type="text" name="option" class="form-control" placeholder="option">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            </div>
        </div>
        
    </form>

@endsection