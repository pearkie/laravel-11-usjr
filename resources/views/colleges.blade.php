<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Colleges</title>
</head>
<body>
    <h1>All Colleges</h1>
    <ul>
        @foreach ($colleges as $college)
            <li>
                {{ $college->collfullname }}
                <ul>
                    @foreach ($college->departments as $department)
                        <li>{{ $department->deptfullname }}</li>
                    @endforeach
                </ul>
            </li>
        @endforeach
    </ul>
</body>
</html>
