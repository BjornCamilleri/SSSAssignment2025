@extends('layouts.main')

@section('content')

<main class="py-5">
  <div class="container">
    <div class="row justify-content-md-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header card-title">
            <strong>Edit Student</strong>
          </div>           
          <div class="card-body">
            <form action="{{ route('students.editstorage', $student->id) }}" method="POST">
              @csrf
              <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ $student->name }}" required>
              </div>

              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" id="email" class="form-control" value="{{ $student->email }}" required>
              </div>

              <div class="mb-3">
                <label for="phone" class="form-label">Phone</label>
                <input type="text" name="phone" id="phone" class="form-control" value="{{ $student->phone }}" required>
              </div>

              <div class="mb-3">
                <label for="dob" class="form-label">Dob</label>
                <input type="date" name="dob" id="dob" class="form-control" value="{{ $student->dob }}" required>
              </div>

              <div class="mb-3">
                <label for="college_id" class="form-label">College</label>
                <select name="college_id" id="college_id" class="form-control" required>
                  @foreach($colleges as $id => $name)
                    <option value="{{ $id }}" @if($student->college_id == $id) selected @endif>{{ $name }}</option>
                  @endforeach
                </select>
              </div>

              <div class="d-flex justify-content-center mt-4">
                <button type="submit" class="btn btn-success w-100">Submit</button>
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>

@endsection
