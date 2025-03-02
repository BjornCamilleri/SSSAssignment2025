<div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="text" name="name" id="name" value="{{ old('name', $college->name) }}" class="form-control @error('name') is-invalid @enderror">

    @error('name')
    <div class="invalid-feedback">
        {{ $message }}
    </div>
    @enderror
</div>

<div class="mb-3">
    <label for="address" class="form-label">Address</label>
    <input type="text" name="address" id="address" value="{{ old('address', $college->address) }}" class="form-control @error('address') is-invalid @enderror">

    @error('address')
    <div class="invalid-feedback">
        {{ $message }}
    </div>
    @enderror
</div>

<div class="d-flex justify-content-center mt-4">
    <button type="submit" class="btn btn-success w-100">Update</button>
</div>