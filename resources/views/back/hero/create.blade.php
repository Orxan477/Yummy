@extends('back.layouts.master')
@section('content')
<div class="card">
    <div class="card-body">
      <h5 class="card-title fw-semibold mb-4">Forms</h5>
      <div class="card">
        <div class="card-body">
          <form method="post" action="{{route("create_hero")}}" enctype="multipart/form-data">
            @csrf
            <ul style="list-style:disc;">
              @foreach ($errors->all() as $error)
                <li class="tex-danger">{{ $error }}</li>
            @endforeach
          </ul>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Image</label>
              <input type="file" name="image" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label class="form-label">Content</label>
              <input type="text" name="content" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label class="form-label">Title</label>
                <input type="text" name="title" class="form-control" id="exampleInputPassword1">
              </div>
            <button type="submit" class="btn btn-primary">Təsdiqlə </button>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection