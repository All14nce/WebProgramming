@extends('master')

@section('title', 'Dashboard Admin Mahasiswa')
@section('setActiveMhs', 'active')

@section('content')
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
@endsection