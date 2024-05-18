@extends('layouts.app')

@section('content')
<div class="rounded-2 bg-light container mb-5 mt-5 p-5 shadow-lg">
    <div class="d-flex justify-content-between">
    <div class="container">
        <h1>Data Mahasiswa</h1>
        @foreach($kelasDosen as $kelas)
            <h2>{{ $kelas->nama_kelas }}</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama Mahasiswa</th>
                        <th>NIM</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($kelas->mahasiswas as $mahasiswa)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $mahasiswa->nama }}</td>
                            <td>{{ $mahasiswa->nim }}</td>
                            <td>
                                <a href="{{ route('detailmhs', $mahasiswa->id) }}" class="btn btn-info">Detail</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endforeach
    </div>
@endsection
