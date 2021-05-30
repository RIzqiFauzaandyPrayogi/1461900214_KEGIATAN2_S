<html>
<head>
    <title>Tabel Kelas</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <td>ID Kelas</td>
                <td>Kelas</td>
            </tr>
        </thead>
        <tbody>@foreach($kelas as $index => $value)
            <tr>
                <td> {{ $value->id_kelas }}</td>
                <td> {{ $value->kelas }}</td>
            </tr>
        </tbody>@endforeach
    </table>
</body>
</html>