@extends('layout/navbar')
@section('container')
<h3>Edit Field</h3>
<a href="/data-mhs">Back</a>
<form method="post" action="/update/{{ $mahasiswa->nim }}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
        <label for="nama">Nama :</label>
        <input type="text" name="nama" id="nama" placeholder="Nama" value="{{ $mahasiswa->nama }}"><br><br>

        <label for="nim">NIM :</label>
        <input type="text" name="nim" id="nim" placeholder="NIM" value="{{ $mahasiswa->nim }}"><br><br>

        <label for="jk">Gender :</label>
        <input type="text" name="jk" id="jk" placeholder="Jenis kelamin" value="{{ $mahasiswa->jk }}"><br><br>

        <label for="prodi">Prodi :</label>
        <input type="text" name="prodi" id="prodi" placeholder="Prodi" value="{{ $mahasiswa->prodi }}"><br><br>

        <label for="alamat">Alamat :</label>
        <textarea name="alamat" id="alamat" placeholder="Alamat">{{ $mahasiswa->alamat }}</textarea>

        <input type="submit" value="Update">
</form>
@endsection