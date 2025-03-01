<!DOCTYPE html>
<html lang="en">
<head>
    <title>Colleges</title>
</head>
<body>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Address</th>
                </tr>
            </thead>
            <tbody>
                @foreach($colleges as $college)
                <tr>
                    <td>{{ $college->name }}</td>
                    <td>{{ $college->address }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>