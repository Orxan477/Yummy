@extends('back.layouts.master')
@section('content')
<div class="container-fluid">
    <!--  Row 1 -->
    <div class="row">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Content</th>
                <th scope="col">Image</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($banner as $item)
                    <tr>
                      <th scope="row">{{ $item->id }}</th>
                      <td>{{ $item->name }}</td>
                      <td>{{ $item->content }}</td>
                      <td>{{ $item->image }}</td>
                    </tr>
                 @endforeach
            </tbody>
          </table>
        
    </div>
</div>
@endsection