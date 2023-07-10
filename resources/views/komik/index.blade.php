@extends('layouts.app')

@section('content')

<div class="container">
    <h3>Daftar Penyewaan Komik <a href="{{ url('komik/create') }}">Tambah Data</a></h3>
    <form class="form" method="get" action="{{ url('komik/search') }}">
        <div class="form-group w-100 mb-3">
            <input type="text" name="search" class="form-control w-75 d-inline" id="search" placeholder="Masukkan keyword">
            <button type="submit" class="btn btn-primary mb-1">Cari</button>
        </div>
    </form>
    <table class="table">
        <tr>
            <th>No User</th>
            <th>Nama User</th>
            <th>Nama Komik</th>
            <th>No Tlp</th>
            <th>Alamat</th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
        @foreach($rows as $row)
        <tr>
            <td>{{ $row->no_user }}</td>
            <td>{{ $row->nama_user }}</td>
            <td>{{ $row->nama_komik }}</td>
            <td>{{ $row->no_tlp }}</td>
            <td>{{ $row->alamat }}</td>
            <td><a href="{{ url('komik/' . $row->id_komik . '/edit') }}" class="btn btn-primary">Edit</a></td>
            <td><a href="{{ url('komik/' . $row->id_komik . '/lihat') }}" class="btn btn-info">Lihat</a></td>
            <td>
                <form action="{{ url('komik/' . $row->id_komik) }}" method="POST">
                    <input name="_method" type="hidden" value="DELETE">
                    @csrf
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>

@endsection