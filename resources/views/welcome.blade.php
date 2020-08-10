@extends('layouts.master')
@section('content')
<style>
    .center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
}
</style>
<h1 class="h3 mb-4 text-gray-800 center">Blank Page</h1>
<img src="{{asset ('/images/ERD.png')}}" alt="ERD" class="center">
<a href="/proyek" class="btn btn-primary">Ke Halaman Index</a>
@endsection