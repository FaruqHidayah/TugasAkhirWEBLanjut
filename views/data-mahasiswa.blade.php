@extends('layout/navbar')
@section('container')
<h1>Halaman Data</h1>
<div>
<a href="/tambah-data">Add Data</a>
<table style="text-align:left ;border:1px solid;border-collapse: collapse;">
    <tr>
        <th style="border:1px solid; padding : 10px; text-allign:center">No</th>
        <th style="border:1px solid; padding : 10px; text-allign:center">Nama</th>
        <th style="border:1px solid; padding : 10px; text-allign:center">Nim</th>
        <th style="border:1px solid; padding : 10px; text-allign:center">Jenis Kelamin</th>
        <th style="border:1px solid; padding : 10px; text-allign:center">Prodi</th>
        <th style="border:1px solid; padding : 10px; text-allign:center">Alamat</th>
        <th style="border: 1px solid; padding: 10px; text-align: center;">Actions</th>
        
    </tr>
@foreach ($mahasiswa as $mhs)
    <tr>
        <td style="border:1px solid; padding : 10px; text-allign:center">{{$loop->iteration}}</td>
        <td style="border:1px solid; padding : 10px; text-allign:center">{{$mhs->nama}}t</td>
        <td style="border:1px solid; padding : 10px; text-allign:center">{{$mhs->nim}}</td>
        <td style="border:1px solid; padding : 10px; text-allign:center">{{$mhs->jk}}</td>
        <td style="border:1px solid; padding : 10px; text-allign:center">{{$mhs->prodi}}</td>
        <td style="border:1px solid; padding : 10px; text-allign:center">{{$mhs->alamat}}</td>
        <td>
            <a href="/mhs-edit/{{$mhs -> nim}}">Edit</a>
            <a href="/delete/{{$mhs -> nim}}"> Delete</a>
        </td>
       
    </tr>
@endforeach
</table>
</div>
@endsection