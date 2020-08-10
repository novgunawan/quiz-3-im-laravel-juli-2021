@extends('layouts.master')
@section('content')
<div class="table-responsive mt-3 ml-3">
   <div class="dataTable_wrapper">
    <div class="row"><div class="col-sm-12"><table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
        <thead>
          <tr role="row"><th  tabindex="0" aria-controls="dataTable" 
            rowspan="1" colspan="1" aria-sort="ascending" width="10px"; 
            >No</th>
            
            <th  tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" 
            >Nama Proyek</th>
            <th tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" 
            >Deskripsi Proyek</th>
            <th  tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1"
            style="width: 159px;">Aksi</th>
        </thead>
        <tbody>  
          @forelse ($proyek as $key => $p)
          <tr>
            <td >{{$key+1}}</td>
            <td>{{$p->namaProyek}}</td>
            <td>{{$p->deskripsiProyek}}</td>
          <td><a href="/proyek/{{$p->id}}"class="btn btn-block btn-outline-primary btn-sm">Show</a>
          <a href="/proyek/{{$p->id}}/edit" class="btn btn-block btn-outline-primary btn-sm">Edit</a>
          <form method="POST" action="/proyek/{{$p->id}}">
            @csrf
            @method('delete')
            <input type="submit" class="btn btn-block btn-outline-danger btn-sm" value="Delete">
          </form>
        </td>
          @empty
            <td>Tidak ada Proyek</td>  
          @endforelse
        
        
</tbody>
      </table></div></div>
   </div>
  </div>
@endsection