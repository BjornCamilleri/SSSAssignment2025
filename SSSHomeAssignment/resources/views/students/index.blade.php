<!DOCTYPE html>
<html lang="en">
<head>
    <title>Students</title>
</head>
<body>
    <div class="container">
        <form action="{{ route('students.index') }}" method="GET">
            <label for="college_id">Filter by College</label>
            <select name="college_id" id="college_id" onchange="this.form.submit()">
                @foreach($colleges as $id => $name)
                    <option value="{{ $id }}" {{ request('college_id') == $id ? 'selected' : '' }}>{{ $name }}</option>
                @endforeach
            </select>

            <label for="sort">Sort by Name</label>
            <select name="sort" id="sort" onchange="this.form.submit()">
                <option value="asc" {{ request('sort') == 'asc' ? 'selected' : '' }}>Ascending</option>
                <option value="desc" {{ request('sort') == 'desc' ? 'selected' : '' }}>Descending</option>
            </select>
        </form>

        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Dob</th>
                    <th>College</th>
                </tr>
            </thead>
            <tbody>
                @foreach($students as $student)
                <tr>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->email }}</td>
                    <td>{{ $student->phone }}</td>
                    <td>{{ $student->dob }}</td>
                    <td>{{ $student->college->name }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>