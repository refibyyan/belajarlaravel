<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

{{-- <body>
    <h1>Profile</h1>
    <p> Nama: {{ $nama }}</p>
    <p> NIM: {{ $nim }}</p>
    <p> Kelas: {{ $kelas }}</p>
</body> --}}

<body>
    <nav>
        <a href="beranda"> Beranda </a>
    </nav>

    <h1>Profile</h1>
    <p> Nama: {{ $nama }}</p>
    <p> NIM: {{ $nim }}</p>
    <p> Kelas: {{ $kelas }}</p>
    <p> Status: {{ $status }}</p>

    @if ($status === 'aktif')
        <p>Status: Aktif</p>
    @else
        <p> Status : Tidak Aktif</p>
    @endif
</body>

</html>
