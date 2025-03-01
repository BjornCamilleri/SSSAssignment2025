<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Student</title>
</head>
<body>
    <div>
        <form action="{{ route('students.store') }}" method="POST">
            @csrf
            <label for="name">Name</label>
            <input type="text" name="name" id="name" required>

            <label for="email">Email</label>
            <input type="email" name="email" id="email" required>

            <label for="phone">Phone</label>
            <input type="text" name="phone" id="phone" required>

            <label for="dob">Dob</label>
            <input type="date" name="dob" id="dob" required>

            <label for="college_id">College</label>
            <select name="college_id" id="college_id" required>
                @foreach($colleges as $id => $name)
                    <option value="{{ $id }}">{{ $name }}</option>
                @endforeach
            </select>

            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>