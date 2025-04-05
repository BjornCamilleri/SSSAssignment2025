@extends('layouts.main')

@section('content')

<main class="py-5">
    <div class="container d-flex flex-column align-items-center" style="min-height: 80vh;">
        <h1 class="mb-4">SSS Home Assignment</h1>
        <div class="d-flex">
            <a href="{{ route('colleges.index') }}" class="btn btn-success mx-2">All Colleges</a>
            <a href="{{ route('students.index') }}" class="btn btn-success mx-2">All Students</a>
        </div>
    </div>
</main>

@endsection