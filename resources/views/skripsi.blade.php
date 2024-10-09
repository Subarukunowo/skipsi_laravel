<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Skripsi</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h1 class="text-center">Daftar Skripsi</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Judul</th>
                <th>Nama</th>
                <th>NIM</th>
                <th>Angkatan</th>
                <th>Dosen Pembimbing 1</th>
                <th>Dosen Pembimbing 2</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($skripsis as $item)
            <tr>
                <td>{{ $item->Judul }}</td>
                <td>{{ $item->nama }}</td>
                <td>{{ $item->nim }}</td>
                <td>{{ $item->angkatan }}</td>
                <td>{{ $item->Dosenpembimbing1 }}</td>
                <td>{{ $item->Dosenpembimbing2 }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</body>
</html>
