@extends('students.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Edit Data Mahasiswa</div>
  <div class="card-body">
      
      <form action="{{ url('student/' .$students->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$students->id}}" id="id" />
        <label>Nama</label></br>
        <input type="text" name="nama" id="nama" value="{{$students->nama}}" class="form-control"></br>
        <label>NIM</label>
        <input type="text" name="nim" id="nim" value="{{$students->nim}}" class="form-control"></br>
        <label>Jurusan</label>
        <input type="text" name="jurusan" id="jurusan" value="{{$students->jurusan}}" class="form-control"></br>
        <label>Angkatan</label>
        <input type="text" name="angkatan" id="angkatan" value="{{$students->angkatan}}" class="form-control"></br>
        <label>Contact</label>
        <input type="text" name="contact" id="contact" value="{{$students->contact}}" class="form-control"></br>
        <label>Genre</label>
        <input type="text" name="genre" id="genre" value="{{$students->genre}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop