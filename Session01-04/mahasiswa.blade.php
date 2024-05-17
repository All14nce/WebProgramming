<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <style type="text/css">
        div{
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-6">col-1</div>
            <div class="col-6">col-2</div>
        </div>
    </div>

    <a href="" class="btn btn-danger">Click Here</a>

    <h1>{{ $judul }}</h1>
    {{ $judul }}

    @foreach($listMhs as $mhs)
        {{ $mhs }}
    @endforeach

    {{ $nilai }}

    @if($nilai >= 75)
        <h1>Grade A</h1>
    @elseif($nilai >= 50)
        <h1>Grade B</h1>
    @endif

    @for($i = 0; $i <= 10; $i++)
        <p> {{ $i }} </p>
    @endfor

    <!-- forelse untuk cek data jika kosong atau tidak -->
   <ul>
        @forelse($listMhs as $mhs)
            <li>{{ $mhs }}</li>
        @empty
            <h1>Tidak ada data</h1>
        @endforelse
   </ul>
</body>
</html>