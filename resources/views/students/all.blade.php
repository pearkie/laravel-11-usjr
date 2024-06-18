<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Students</title>
</head>
<body>
    <h1>All Students</h1>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Last Name</th>
                <th>First Name</th>
                <th>Middle Name</th>
                <th>College</th>
                <th>Program</th>
                <th>Program ID</th>
                <th>College ID</th>
                <th>Year</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
                <tr>
                    <td>{{ $student->studid }}</td>
                    <td>{{ $student->studlastname }}</td>
                    <td>{{ $student->studfirstname }}</td>
                    <td>{{ $student->studmidname }}</td>
                    <td>{{ $student->colleges->collfullname }}</td>
                    <td>{{ $student->programs->progfullname }}</td>
                    <td>{{ $student->studprogid }}</td>
                    <td>{{ $student->studcollid }}</td>
                    <td>{{ $student->studyear }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
