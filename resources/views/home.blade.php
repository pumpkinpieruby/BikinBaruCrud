<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Izin Staff</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <style>
        body {
            background-color: #e0f7f5;
        }
        .navbar {
            background-color: #20c997;
        }
        .table-container {
            background: white;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .btn-tambah {
            background-color: #20c997;
            color: white;
        }
        .btn-tambah:hover {
            background-color: #17a589;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Izin Staff</a>
            <div class="ms-auto">
                <a href="/profile" class="btn btn-light">Profile</a>
                <a href="/logout" class="btn btn-danger">Logout</a>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <div class="table-container">
            <div class="d-flex justify-content-between mb-3">
                <h2>Data Izin Staff</h2>
                <a href="/form" class="btn btn-tambah">Tambah Izin</a>
            </div>
            <table class="table table-striped">
                <thead class="table-success">
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
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
