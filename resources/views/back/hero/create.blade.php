@extends('back.layouts.master')
@section('content')
<div class="card">
    <div class="card-body">
      <h5 class="card-title fw-semibold mb-4">Forms</h5>
      <div class="card">
        <div class="card-body">
          <form method="post" action="{{route("create_gallery")}}" enctype="multipart/form-data">
            @csrf
            <ul style="list-style:disc;">
              @foreach ($errors->all() as $error)
                <li class="text-danger">{{ $error }}</li>
            @endforeach
          </ul>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Image</label>
            <input type="file" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
            <button type="submit" class="btn btn-primary">Təsdiqlə </button>
            <a href="{{route('hero')}}" class="btn btn-light">Ləğv et</a>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection