<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>College Details</title>
</head>
<body>
    <h1>College Details</h1>
    <p>College Name: {{ $college->collfullname }}</p>
    <ul>
        @foreach ($college->departments as $department)
            <li>{{ $department->deptfullname }}</li>
        @endforeach
    </ul>
</body>
</html>
