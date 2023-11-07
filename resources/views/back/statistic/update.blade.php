@extends('back.layouts.master')
@section('content')
<div class="card">
    <div class="card-body">
      <h5 class="card-title fw-semibold mb-4">Forms</h5>
      <div class="card">
        <div class="card-body">
            <form method="post" action="{{route('statistic.update_post')}}">
            @csrf
            <ul style="list-style:disc;">
              @foreach ($errors->all() as $error)
                <li class="text-danger">{{ $error }}</li>
            @endforeach
            </ul>
            <h5 class="mb-4">{{$statistic->title}}</h5>
            <div class="mb-3">
                <label class="form-label">Cient</label>
                <input type="number" name="client" class="form-control" id="exampleInputPassword1" value={{$statistic ->client}}>
              </div>
            <div class="mb-3">
              <label class="form-label">Project</label>
              <input type="number" name="project" class="form-control" id="exampleInputPassword1" value={{$statistic ->project}}>
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Hours Of Project</label>
              <input type="number" name="hours_of_project" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value={{$statistic ->hours_of_project}}>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Worker</label>
                <input type="number" name="worker" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value={{$statistic ->worker}}>
              </div>
            <button type="submit" class="btn btn-primary">Təsdiqlə </button>
            <a href="{{route('statistic')}}" class="btn btn-light">Ləğv et</a>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection