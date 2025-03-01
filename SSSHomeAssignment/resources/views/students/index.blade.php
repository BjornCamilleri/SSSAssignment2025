<!DOCTYPE html>
<html lang="en">
<head>
    <title>Students</title>
</head>
<body>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Dob</th>
                    <th>College ID</th>
                </tr>
            </thead>
            <tbody>
                @foreach($students as $student)
                <tr>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->email }}</td>
                    <td>{{ $student->phone }}</td>
                    <td>{{ $student->dob }}</td>
                    <td>{{ $student->college_id }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>