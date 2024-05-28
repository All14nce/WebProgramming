@extends('master')

@section('tile', 'Dashboard Admin Dosen')
@section('setActiveDsn', 'active')

@section('content')
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
@endsection