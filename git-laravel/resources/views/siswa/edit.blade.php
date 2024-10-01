@extends('layout.header')

@section('content')

<h4>edit siswa</h4>
<form action="{{route('siswa.update',$siswa->id)}}" method="post">
    @csrf
<label>NIS</label>
<input type="number" name="nis" value="{{ $siswa->nis }}" class="form-control mb-2">
<label>nama</label>
<input type="text" name="nama" value="{{ $siswa->nama }}" class="form-control mb-2">
<label>alamat</label>
<input type="text" name="alamat" value="{{ $siswa->alamat }}" class="form-control mb-2">
<label>no hp</label>
<input type="text" name="no_hp" value="{{ $siswa->no_hp }}" class="form-control mb-2">
<label>jenis kelamin</label>
<input type="text" name="jenis_kelamin" value="{{ $siswa->jenis_kelamin }}" class="form-control mb-2">
<label>hobi</label>
<input type="text" name="hobi" value="{{ $siswa->hobi }}" class="form-control mb-2">

<button class="btn btn-primary">edit</button>
</form>

@endsection