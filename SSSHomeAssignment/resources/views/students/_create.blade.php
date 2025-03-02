<div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="text" name="name" id="name" class="form-control" placeholder="Enter student name" required>
  </div>

  <div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="email" name="email" id="email" class="form-control" placeholder="Enter email" required>
  </div>

  <div class="mb-3">
    <label for="phone" class="form-label">Phone</label>
    <input type="text" name="phone" id="phone" class="form-control" placeholder="Enter phone number" required>
  </div>

  <div class="mb-3">
    <label for="dob" class="form-label">Date of Birth</label>
    <input type="date" name="dob" id="dob" class="form-control" required>
  </div>

  <div class="form-row">
    <div class="col">
      <label for="college_id" class="form-label">College</label>
      <select name="college_id" id="college_id" class="form-control" required>
        @foreach($colleges as $id => $name)
          <option value="{{ $id }}">{{ $name }}</option>
        @endforeach
      </select>
    </div>
  </div>

  <div class="d-flex justify-content-center mt-4">
    <button type="submit" class="btn btn-success w-100">Submit</button>
  </div>