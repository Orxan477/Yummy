@extends('back.layouts.master')
@section('content')
<div class="container-fluid">
    <!--  Row 1 -->
    <div class="row">
        <div class="d-flex justify-content-between">
            <h3 style="font-weight: bolder">FAQ</h3>
            <a href="{{route('create_faq')}}" class="btn btn-primary">Yenisini yarat</a>
          </div>        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Şəkil</th>
                    <th scope="col">Ad, Soyad</th>
                    <th scope="col">Məzmun</th>
                    <th scope="col">Settings</th>
                  </tr>
            </thead>
            <tbody>
                @foreach ($faq as $index => $item)
                <tr>
                    <th scope="row">{{ $index + 1 }}</th>
                    <th><img src="{{$item->image}}" alt=""></th>
                    <td>{{ Str::limit($item->fullname, 18) }}</td>
                    <td>{{ Str::limit($item->content, 18) }}</td>
                    <td>
                        <a href="{{ route('faq.detail', $item->id) }}" class="btn btn-light">
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
        {{-- @section("js")
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
          <script src="{{asset('back/js/modal.js')}}"> </script>
        @endsection --}}
    </div>
</div>
@endsection