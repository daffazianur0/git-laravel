@extends('layout.header')

@section('content')

<h4>tambah siswa</h4>
<form action="{{route('siswa.submit')}}" method="post">
    @csrf
<label>NIS</label>
<input type="number" name="nis" class="form-control mb-2">
<label>nama</label>
<input type="text" name="nama" class="form-control mb-2">
<label>alamat</label>
<input type="text" name="alamat" class="form-control mb-2">
<label>no hp</label>
<input type="text" name="no_hp" class="form-control mb-2">
<label>jenis kelamin</label>
<input type="text" name="jenis_kelamin" class="form-control mb-2">
<label>hobi</label>
<input type="text" name="hobi" class="form-control mb-2">

<button class="btn btn-primary">tambah</button>
</form>

@endsection