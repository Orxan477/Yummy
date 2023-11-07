@extends('back.layouts.master')
@section('content')
<div class="container-fluid">
    <!--  Row 1 -->
    <div class="row">
        <table class="table">
            <thead>
              <tr>
                <div class="d-flex">
                    <a href="{{route('hero')}}" style="color: black" ><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-back-up" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M9 14l-4 -4l4 -4"></path>
                        <path d="M5 10h11a4 4 0 1 1 0 8h-1"></path>
                     </svg></a>
                    <h5 scope="col"  style="color: rgb(64, 62, 62); margin-left:10px;">{{$banner ->title}}</h5>
                </div>
              </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Image</td>
                    <td><img style="width:160px;" src="{{ $banner->image }}" /></td>
                </tr>
                <tr>
                    <td>Title</td>
                    <td>{{ $banner->title }}</td>
                </tr>
                <tr>
                    <td>Content</td>
                    <td>{{ $banner->content }}</td>
                </tr>
                <tr>
                    <td>Settings</td>
                    <td>
                        <a href="{{ route('product.update', $banner->id) }}" class="btn btn-warning"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-highlight" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M3 19h4l10.5 -10.5a2.828 2.828 0 1 0 -4 -4l-10.5 10.5v4"></path>
                            <path d="M12.5 5.5l4 4"></path>
                            <path d="M4.5 13.5l4 4"></path>
                            <path d="M21 15v4h-8l4 -4z"></path>
                         </svg></a>
                    
                     <a href="{{ route('product.delete', $banner->id) }}" class="btn btn-danger delete-btn"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-trash-x" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M4 7h16"></path>
                        <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12"></path>
                        <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3"></path>
                        <path d="M10 12l4 4m0 -4l-4 4"></path>
                     </svg></a>
                    
                    </td>
                </tr>
            </tbody>
          </table>
        @section("js")
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
          <script src="{{asset('back/js/modal.js')}}"> </script>
        @endsection
    </div>
</div>
@endsection