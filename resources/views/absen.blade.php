<html>
<head>
    <title>Tabel Absen</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <td>ID Absen</td>
                <td>NIS</td>
                <td>Semester</td>
                <td>Tanggal</td>
                <td>Absen</td>
            </tr>
        </thead>
        <tbody>@foreach($absen as $index => $value)
            <tr>
                <td> {{ $value->id_absen }}</td>
                <td> {{ $value->nis }}</td>
                <td> {{ $value->status }}</td>
                <td> {{ $value->tanggal }}</td>
                <td> {{ $value->absen }}</td>
            </tr>
        </tbody>@endforeach
    </table>
</body>
</html>