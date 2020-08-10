@extends('layouts.master')
@section('content')
<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Buat Pertanyaan</h3>
    </div>
    <!-- /.card-header -->

    <!-- form start. Form ini pake method POST karena jawabannya akan direkap, diarahin ke page pertanyaan. -->
    <form role="form" method="POST" action="/proyek">
        @csrf
        <div class="card-body">
         
        <div class="form-group">
          <label for="judulProyek">Judul Proyek</label>
          <input type="text" class="form-control" id="judul" name="judul" placeholder="Judul Proyek" required>
        </div>

        <div class="form-group">
          <label for="descProyek">Deskripsi</label>
          <input type="text" class="form-control" id="desc" name="desc" placeholder="Deskripsi">
        </div>

        <div class="form-group">
            <label for="mulai">Tanggal Mulai Proyek</label>
          <input type="date" name="mulai" id="mulai">
        </div>

        <div class="form-group">
            <label for="deadline">Deadline Proyek</label>
          <input type="date" name="deadline" id="deadline">
        </div>

        <div class="form-group">
            <label for="manager">Manager </label>
            <select name="manager" id="manager">
                <option value="pilih">Pilih Manager</option>
            <option value="{{$manager->nama}}">{{$manager->nama}}</option>
            </select>
        </div>
        

      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Buat Proyek</button>
      </div>

    </form>
  </div>
@endsection