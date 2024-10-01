@extends('layout.header')

@section('content')

 
<div class="d.flax">
    <h4><center>DATA SISWA</h4></center>
    <div class="ms-auto">
        <a class="btn btn-primary" href="{{route('siswa.tambah')}}">tambah siswa</a>
    </div>
</div>
<table class="table">
    <tr>
        <th>no</th>
        <th>nis</th>
        <th>nama</th>
        <th>alamat</th>
        <th>no hp</th>
        <th>jenis kelamin</th>
        <th>hobi</th>
        <th>aksi</th>
        </tr> 
        @foreach($siswa as $no=>$data)
        <tr>
            <td>{{ $no+1 }}</td>
            <td>{{ $data->nis}}</td>
            <td>{{ $data->nama}}</td>
            <td>{{ $data->alamat}}</td>
            <td>{{ $data->no_hp}}</td>
            <td>{{ $data->jenis_kelamin}}</td>
            <td>{{ $data->hobi}}</td>
        <td> 
                <a href="{{ route('siswa.edit',$data->id)}}"class ="btn btn-sm btn-warning">edit</a>
                <a href="{{ route('siswa.delete',$data->id)}}"class ="btn btn-sm btn-danger" id="delete">delete</a>
              
                </form>
                
            <td>
    </tr>
      @endforeach
           </table>
           <a href="/logout"class ="btn btn-sm btn-warning">logout</a>       
@endsection