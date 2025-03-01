<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create College</title>
</head>
<body>
    <div>
        <form action="{{ route('colleges.store') }}" method="POST">
            @csrf
            <label for="name">Name</label>
            <input type="text" name="name" id="name">
            <label for="address">Address</label>
            <input type="text" name="address" id="address">
            <button type="submit">Submit</button>
        </form>
    </div>
    
</body>
</html>