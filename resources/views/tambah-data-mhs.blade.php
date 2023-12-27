@extends('layout/navbar')
@section('container')

<h3>Input data mahasiswa</h3>
<a href="/data-mhs">Kembali</a>

<form action="/mhs/tambah" method="post" enctype="multipart/form-data">
    {{csrf_field()}}
    Nim <input type="text"name="nim" id="nim" required="required"> <br/>
    Nama <input type="text"name="nama" id="nama"required="required"> <br/>
    Jenis Kelamin <input type="text"name="jk" id="jk" required="required"> <br/>
    Prodi <input type="text"name="prodi" id="prodi" required="required"> <br/>
    Alamat <textarea name="alamat" id="alamat" required="required"></textarea> <br/> 
    Foto <input type="file" name="foto" id="foto" required="required"> <br/> 
    <input type="submit" value="Simpan Data">
</form>
@endsection