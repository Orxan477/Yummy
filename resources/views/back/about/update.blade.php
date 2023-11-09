@extends('back.layouts.master')
@section('content')
<div class="card">
    <div class="card-body">
      <h5 class="card-title fw-semibold mb-4">Forms</h5>
      <div class="card">
        <div class="card-body">
            <form method="post" action="{{route('about.update_post')}}" enctype="multipart/form-data">
            @csrf
            <ul style="list-style:disc;">
              @foreach ($errors->all() as $error)
                <li class="text-danger">{{ $error }}</li>
            @endforeach
            </ul>
            <div class="mb-3">
                <label class="form-label">Image Main</label>
                <input type="file" name="image_main" class="form-control" id="exampleInputPassword1">
              </div>
            <div class="mb-3">
              <label class="form-label">Image</label>
              <input type="file" name="image" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Content</label>
              <input type="text" name="content" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value={{$about ->content}}>
            </div>
            <button type="submit" class="btn btn-primary">Təsdiqlə </button>
            <a href="{{route('about')}}" class="btn btn-light">Ləğv et</a>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection