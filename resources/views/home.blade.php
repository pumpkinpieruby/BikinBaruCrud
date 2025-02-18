<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!-- Link ke Bootstrap atau CSS lainnya -->
</head>
<body>
    <h1>Data Izin Staff</h1>
    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>Jabatan</th>
                <th>Tanggal</th>
                <th>Jam Masuk</th>
                <th>Jam Keluar</th>
                <th>Keperluan</th>
                <th>Keterangan</th>
                <th>Pemberi Izin</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $izin)
                <tr>
                    <td>{{ $izin->staff->nama_staff }}</td>
                    <td>{{ $izin->staff->jabatan }}</td>
                    <td>{{ $izin->created_at->format('d-m-Y') }}</td>
                    <td>{{ $izin->jam_masuk }}</td>
                    <td>{{ $izin->jam_keluar }}</td>
                    <td>{{ $izin->keperluan }}</td>
                    <td>{{ $izin->keterangan }}</td>
                    <td>{{ $izin->pemberi_izin }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Link ke form untuk input data -->
    <a href="/form">Tambah Izin</a>
</body>
</html>
