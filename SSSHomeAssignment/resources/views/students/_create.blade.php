<div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="text" name="name" id="name" value="{{ old('name') }}" class="form-control @error('name') is-invalid @enderror" placeholder="Enter student name">

    @error('name')
    <div class="invalid-feedback">
        {{ $message }}
    </div>
    @enderror
</div>

<div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="email" name="email" id="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror" placeholder="Enter email">

    @error('email')
    <div class="invalid-feedback">
        {{ $message }}
    </div>
    @enderror
</div>

<div class="mb-3">
    <label for="phone" class="form-label">Phone</label>
    <input type="text" name="phone" id="phone" value="{{ old('phone') }}" class="form-control @error('phone') is-invalid @enderror" placeholder="Enter phone number">

    @error('phone')
    <div class="invalid-feedback">
        {{ $message }}
    </div>
    @enderror  
</div>

<div class="mb-3">
    <label for="dob" class="form-label">Date of Birth</label>
    <input type="date" name="dob" id="dob" value="{{ old('dob') }}" class="form-control @error('dob') is-invalid @enderror" placeholder="Enter Date of Birth">

    @error('dob')
    <div class="invalid-feedback">
        {{ $message }}
    </div>
    @enderror  
</div>

<div class="form-row">
    <div class="col">
        <label for="college_id" class="form-label">College</label>
        <select name="college_id" id="college_id" class="form-control @error('college_id') is-invalid @enderror">
            @foreach($colleges as $id => $name)
                <option value="{{ $id }}" {{ old('college_id') == $id ? 'selected' : '' }}>{{ $name }}</option>
            @endforeach
        </select>

        @error('college_id')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>
</div>

<div class="d-flex justify-content-center mt-4">
    <button type="submit" class="btn btn-dark w-100">Submit</button>
</div>