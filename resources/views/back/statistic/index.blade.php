@extends('back.layouts.master')
@section('content')
<div class="container-fluid">
    <!--  Row 1 -->
    <div class="row">
        <h3 style="font-weight: bolder">Statistika</h3>
        <table class="table">
            <tbody>
                <tr>
                    <td>Client</td>
                    <td>{{ $statistics->client }}</td>
                </tr>
                <tr>
                    <td>Project</td>
                    <td>{{ $statistics->project }}</td>
                </tr>
                <tr>
                    <td>Hours Of Project</td>
                    <td>{{ $statistics->hours_of_project }}</td>
                </tr>
                <tr>
                    <td>Worker</td>
                    <td>{{ $statistics->worker }}</td>
                </tr>
                <tr>
                    <td>Settings</td>
                    <td>
                        <a href="{{ route('statistic.update')}}" class="btn btn-warning"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-highlight" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M3 19h4l10.5 -10.5a2.828 2.828 0 1 0 -4 -4l-10.5 10.5v4"></path>
                            <path d="M12.5 5.5l4 4"></path>
                            <path d="M4.5 13.5l4 4"></path>
                            <path d="M21 15v4h-8l4 -4z"></path>
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