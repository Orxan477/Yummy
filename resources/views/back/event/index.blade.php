@extends('back.layouts.master')
@section('content')

<div class="container-fluid">
    <!--  Row 1 -->
    <div class="row">
      <div class="d-flex justify-content-between">
        <h3 style="font-weight: bolder">Tədbirlər</h3>
        <a href="{{route('create_event')}}" class="btn btn-primary">Yenisini yarat</a>
      </div>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Şəkil</th>
                <th scope="col">Ad</th>
                <th scope="col">Məzmun</th>
                <th scope="col">Qiymət</th>
                <th scope="col">Settings</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($event as $index => $item)
              <tr>
                  <th scope="row">{{ $index + 1 }}</th>
                  <td><img style="width: 40px; height: 40px;" src="{{ $item->image }}" /></td>
                  <td>{{$item->name}}</td>
                  <td>{{ Str::limit($item->content, 18) }}</td>
                  <td>{{$item->price}}</td>
                  <td>
                      <a href="{{ route('event.detail', $item->id) }}" class="btn btn-light">
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-eye" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                              <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                              <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0"></path>
                              <path d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6"></path>
                          </svg>
                      </a>
                  </td>
              </tr>
          @endforeach
            </tbody>
          </table>
        
    </div>
</div>
@endsection