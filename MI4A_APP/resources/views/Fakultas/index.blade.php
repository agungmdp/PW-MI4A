@extends('Layout.master')
@section('Judul_halaman', 'Halaman Fakultas')

@section('content')
    <h2>Jadwal</h2>
    <p>Ini adalah halaman Jadwal</p>
    ini adalah halaman fakultas
    <ul>
     @foreach ($fakultas as $item)
            <li>{{ $item }}</li>
    
    @endforeach
    </ul>
@endsection
