<html>
<head>
    <title>Tabel Semester</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <td>ID Semester</td>
                <td>Status</td>
            </tr>
        </thead>
        <tbody>@foreach($semester as $index => $value)
            <tr>
                <td> {{ $value->id_semester }}</td>
                <td> {{ $value->status }}</td>
            </tr>
        </tbody>@endforeach
    </table>
</body>
</html>