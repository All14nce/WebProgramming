<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Daftar Dosen</h1>
    {{ $univ }}
    {{ $jur }}

    <ul>
        @forelse($listDosen as $dos)
            <li>{{ $dos }}</li>
        @empty
            <h1>Tidak ada data</h1>
        @endforelse
   </ul>
</body>
</html>