@extends('layouts.app')

 @section('content')

 <div class="container">

 <h3>Edit Data Transaksi</h3>
 <form action="{{ url('/komik/' . $row->id_komik) }}" method="POST">
 <input name="_method" type="hidden" value="PATCH">
 @csrf
 <table>
 <tr>
 <td>NO USER</td>
 <td><input type="text" name="no_user" value="{{ $row->no_user }}"></td>
 </tr>
 <tr>
 <td>NAMA USER</td>
 <td><input type="text" name="nama_user" value="{{ $row->nama_user }}"></td>
 </tr>
 <tr>
 <td>NAMA KOMIK</td>
 <td><input type="text" name="nama_komik" value="{{ $row->nama_komik }}"></td>
 </tr>
 <tr>
 <td>NO TLP</td>
 <td><input type="text" name="no_tlp" value="{{ $row->no_tlp }}"></td>
 </tr>
 <tr>
 <td>ALAMAT</td>
 <td><input type="text" name="alamat" value="{{ $row->alamat }}"></td>
 </tr>
 <tr>
 <td></td>
 <td><input type="submit" value="UPDATE"></td>
 </tr>
 </table>
 </form>
 </div>

 @endsection
