<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Details</title>
</head>
<body>
    <h1>Student Details</h1>
    <p>ID: {{ $student->id }}</p>
    <p>First Name: {{ $student->studfirstname }}</p>
    <p>Last Name: {{ $student->studlastname }}</p>
    <p>Program ID: {{ $student->studprogid }}</p>
    <p>College ID: {{ $student->studcollid }}</p>
    <p>Year: {{ $student->studyear }}</p>
</body>
</html>
