@extends('layouts.master')
@section('content')
<<div class="card bg-light mt-3 ml-3">
    <div class="card-header text-muted border-bottom-0">
      Proyek {{$proyek->id}} 
    </div>
    <div class="card-body pt-0">
      <div class="row">
        <div class="col-7">
        <h2 id = "judul"><strong>{{$proyek->namaProyek}}</strong></h2>
        <p class="text-muted text-sm" id="desc">{{$proyek->deskripsiProyek}}</p>
        <p class="text-muted text-sm" id="manager" name="manager"> Manager : {{$manager}}</p>
        <p class="text-muted text-sm" id="mulai">Tanggal Mulai : {{$proyek->tglMulaiProyek}}</p>
        <p class="text-muted text-sm" id="deadline">Deadline : {{$proyek->tglDeadlineProyek}}</p>
        </div>
        
      </div>
    </div>
    <a href="/proyek" class="btn btn-block btn-outline-primary btn-sm">Kembali ke index</a>
  </div>
@endsection