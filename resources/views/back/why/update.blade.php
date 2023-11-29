@extends('back.layouts.master')
@section('content')
<div class="card">
    <div class="card-body">
      <h5 class="card-title fw-semibold mb-4">Forms</h5>
      <div class="card">
        <div class="card-body">
            <form method="post" action="{{route('why.update_post')}}">
            @csrf
            <ul style="list-style:disc;">
              @foreach ($errors->all() as $error)
                <li class="text-danger">{{ $error }}</li>
            @endforeach
            </ul>
            <h5 class="mb-4">{{$why->title}}</h5>
            <div class="mb-3">
                <label class="form-label">Title</label>
                <input type="hidden" name="id" value={{$why->id}}>
                <input type="text" name="title" class="form-control" id="exampleInputPassword1" value={{$why ->title}}>
              </div>
            <div class="mb-3">
              <label class="form-label">Content</label>
              <input type="text" name="content" class="form-control" id="exampleInputPassword1" value={{$why ->content}}>
            </div>
            <button type="submit" class="btn btn-primary">Təsdiqlə </button>
            <a href="{{route('why')}}" class="btn btn-light">Ləğv et</a>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection