@extends('back.layouts.master')
@section('content')

<div class="container-fluid">
    <!--  Row 1 -->
    <div class="row">
      <div class="d-flex justify-content-end">
        <a href="{{route('create_gallery')}}" class="btn btn-primary">Yenisini yarat</a>
      </div>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Image</th>
                <th scope="col">Settings</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($gallery as $index => $item)
              <tr>
                  <th scope="row">{{ $index + 1 }}</th>
                  <td><img style="width: 80px; height: 80px;" src="{{ $item->name }}" /></td>
                  <td>
                    <a href="{{ route('gallery.update', $item->id) }}" class="btn btn-warning"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-highlight" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M3 19h4l10.5 -10.5a2.828 2.828 0 1 0 -4 -4l-10.5 10.5v4"></path>
                        <path d="M12.5 5.5l4 4"></path>
                        <path d="M4.5 13.5l4 4"></path>
                        <path d="M21 15v4h-8l4 -4z"></path>
                     </svg></a>
                
                 <a href="{{ route('gallery.delete', $item->id) }}" class="btn btn-danger delete-btn"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-trash-x" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M4 7h16"></path>
                    <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12"></path>
                    <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3"></path>
                    <path d="M10 12l4 4m0 -4l-4 4"></path>
                 </svg></a>
                  </td>
              </tr>
          @endforeach
            </tbody>
          </table>
        </div>
      </div>
      @endsection
      @section("js")
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="{{asset('back/js/modal.js')}}"> </script>
      @endsection