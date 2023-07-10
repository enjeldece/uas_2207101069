@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Lihat Data Transaksi</h3>
    <form>
        @csrf
        <table class="table">
            <tr>
                <td>NO USER</td>
                <td>{{ $row->no_user }}</td>
            </tr>
            <tr>
                <td>NAMA USER</td>
                <td>{{ $row->nama_user }}</td>
            </tr>
            <tr>
                <td>NAMA KOMIK</td>
                <td>{{ $row->nama_komik }}</td>
            </tr>
            <tr>
                <td>NO TLP</td>
                <td>{{ $row->no_tlp }}</td>
            </tr>
            <tr>
                <td>ALAMAT</td>
                <td>{{ $row->alamat }}</td>
            </tr>
            <tr>
                <td><a href="{{ url('komik') }}" class="btn btn-primary">Kembali</a></td>
            </tr>
        </table>
    </form>
</div>
@endsection
