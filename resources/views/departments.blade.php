<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Departments</title>
</head>
<body>
    <h1>All Departments</h1>
    <ul>
        @foreach ($departments as $department)
            <li>
                {{ $department->deptfullname }}
                <ul>
                    <li>{{ $department->colleges->collfullname }}</li>
                </ul>
            </li>
        @endforeach
    </ul>
</body>
</html>
