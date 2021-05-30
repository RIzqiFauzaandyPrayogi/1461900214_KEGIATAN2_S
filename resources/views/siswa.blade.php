<html>
<head>
    <title>Siswa</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <td>NIS</td>
                <td>Nama</td>
                <td>ID Kelas</td>
            </tr>
        </thead>
        <tbody>@foreach($siswa as $index => $value)
            <tr>
                <td> {{ $value->nis }}</td>
                <td> {{ $value->nama }}</td>
                <td> {{ $value->id_kelas }}</td>
            </tr>
        </tbody>@endforeach
    </table>
</body>
</html>