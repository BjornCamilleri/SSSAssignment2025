@extends('layouts.main')

@section('content')

<main class="py-5">
  <div class="container">
    <div class="row justify-content-md-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header card-title">
            <strong>Edit College</strong>
          </div>           
          <div class="card-body">
            <form action="{{ route('colleges.editstorage', $college->id) }}" method="POST">
              @csrf

              <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ $college->name }}" required>
              </div>

              <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <input type="text" name="address" id="address" class="form-control" value="{{ $college->address }}" required>
              </div>

              <div class="d-flex justify-content-center mt-4">
                <button type="submit" class="btn btn-success w-100">Update</button>
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>

@endsection
