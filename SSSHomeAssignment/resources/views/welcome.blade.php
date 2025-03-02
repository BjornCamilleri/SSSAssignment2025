<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SSS Home Assignment</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

</head>

<body style="background-color: #f8f9fa; font-family: 'Figtree', sans-serif;">
    <div style="max-width: 800px; margin: 50px auto; padding: 20px; background-color: #ffffff; border-radius: 8px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
        <h1 style="color: #343a40; text-align: center; margin-bottom: 20px;">SSS Home Assignment</h1>
        <div style="text-align: center;">
            <a href="{{ route('colleges.index') }}" style="display: inline-block; padding: 10px 20px; margin-right: 10px; background-color: #28a745; color: #ffffff; text-decoration: none; border-radius: 4px;">All Colleges</a>
            <a href="{{ route('students.index') }}" style="display: inline-block; padding: 10px 20px; background-color: #28a745; color: #ffffff; text-decoration: none; border-radius: 4px;">All Students</a>
        </div>
    </div>
</body>
</html>