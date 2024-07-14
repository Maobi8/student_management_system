<!-- resources/views/students/show.blade.php -->

@extends('layouts')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1>Student Details</h1>
            <div>
                <p><strong>Name:</strong> {{ $student->name }}</p>
                <p><strong>Address:</strong> {{ $student->address }}</p>
                <p><strong>Mobile:</strong> {{ $student->mobile }}</p>
            </div>
            <a href="{{ route('students.edit', $student->id) }}" class="btn btn-primary">Edit</a>
            <form action="{{ route('students.destroy', $student->id) }}" method="POST" style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this student?')">Delete</button>
            </form>
        </div>
    </div>
@endsection
