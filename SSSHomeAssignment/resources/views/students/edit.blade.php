<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Edit Student</h1>
    <div>
        <form action="{{ route('students.editstorage', $student->id) }}" method="POST">
            @csrf
            <label for="name">Name</label>
            <input type="text" name="name" id="name" value="{{ $student->name }}" required>

            <label for="email">Email</label>
            <input type="email" name="email" id="email" value="{{ $student->email }}" required>

            <label for="phone">Phone</label>
            <input type="text" name="phone" id="phone" value="{{ $student->phone }}" required>

            <label for="dob">Dob</label>
            <input type="date" name="dob" id="dob" value="{{ $student->dob }}" required>

            <label for="college_id">College</label>
            <select name="college_id" id="college_id" required>
                @foreach($colleges as $id => $name)
                    <option value="{{ $id }}" @if($student->college_id == $id) selected @endif>{{ $name }}</option>
                @endforeach
            </select>

            <button type="submit">Submit</button>
        </form>
    </div>
    
</body>
</html>