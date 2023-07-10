@extends('layouts.app')

@section('content')
    <div class="container">

        <h3>Tambah Data Transaksi</h3>
        <form action="{{ url('/komik') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label>NO USER</label>
                <input type="text" class="form-control" name="no_user">
            </div>
            <div class="mb-3">
                <label>NAMA USER</label>
                <input type="text" class="form-control" name="nama_user">
            </div>
            <div class="mb-3">
                <label>NAMA KOMIK</label>
                <input type="text" class="form-control" name="nama_komik">
            </div>
            <div class="mb-3">
                <label>NO TLP</label>
                <input type="text" class="form-control" name="no_tlp">
            </div>
            <div class="mb-3">
                <label>ALAMAT</label>
                <textarea class="form-control" name="alamat"></textarea>
            </div>
            <div class="mb-3">
                <input type="submit" value="SIMPAN" class="btn btn-primary">
            </div>
        </form>
    </div>
@endsection
