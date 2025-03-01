<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit College</title>
</head>
<body>
    <div class="container">
        <h1>Edit College - Only id 1</h1>
        <form action="{{ route('colleges.editstorage', $college->id) }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ $college->name }}" required>
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" name="address" id="address" class="form-control" value="{{ $college->address }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</body>
</html>