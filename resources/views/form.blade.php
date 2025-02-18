<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Izin</title>
</head>
<body>
    <h1>Form Input Izin</h1>
    <form action="/submit-form" method="POST">
        @csrf
        <label for="staff">Staff:</label>
        <select name="id_staff" id="staff" required>
            @foreach ($staff as $s)
                <option value="{{ $s->id_staff }}">{{ $s->nama_staff }}</option>
            @endforeach
        </select>
        <br>

        <label for="jam_masuk">Jam Masuk:</label>
        <input type="time" id="jam_masuk" name="jam_masuk" required>
        <br>

        <label for="jam_keluar">Jam Keluar:</label>
        <input type="time" id="jam_keluar" name="jam_keluar" required>
        <br>

        <label for="keperluan">Keperluan:</label>
        <select name="keperluan" id="keperluan" required>
            <option value="Dinas">Dinas</option>
            <option value="Pribadi">Pribadi</option>
        </select>
        <br>

        <label for="keterangan">Keterangan:</label>
        <textarea name="keterangan" id="keterangan"></textarea>
        <br>

        <label for="pemberi_izin">Pemberi Izin:</label>
        <input type="text" id="pemberi_izin" name="pemberi_izin" required>
        <br>

        <button type="submit">Submit</button>
    </form>
</body>
</html>
