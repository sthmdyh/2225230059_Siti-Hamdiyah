@extends('students.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Input Data Mahasiswa Solo Vokal PORSENI FKIP UNTIRTA 2023</div>
  <div class="card-body">
      
      <form action="{{ url('student') }}" method="post">
        {!! csrf_field() !!}
        <label>Nama</label></br>
        <input type="text" name="nama" id="nama" class="form-control" placeholder="Input Nama Lengkap Anda"></br>
        <label>NIM</label></br>
        <input type="text" name="nim" id="nim" class="form-control" placeholder="Input NIM Anda Contoh:2225230006"></br>
        <label>Jurusan</label></br>
        <input type="text" name="jurusan" id="jurusan" class="form-control" placeholder="Input Jurusan Anda"></br>
        <label>Angkatan</label></br>
        <input type="text" name="angkatan" id="angkatan" class="form-control" placeholder="Input Tahun Angkatan Anda"></br>
        <label>Contact</label></br>
        <input type="text" name="contact" id="contact" class="form-control" placeholder="Input Kontak telepon yang bisa dihubungi"></br>
        <label>Genre</label></br>
        <input type="text" name="genre" id="genre" class="form-control" placeholder="Input Genre Musik yang akan diperlombakan"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop