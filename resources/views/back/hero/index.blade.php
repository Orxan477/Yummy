@extends('back.layouts.master')
@section('content')
@foreach ($banner as $item)
    <!-- Burada her bir öğeyi listeleyebilirsiniz -->
    {{ $item->title }}
    <!-- Diğer özellikleri göstermek için buraya ekleme yapabilirsiniz -->
@endforeach
@endsection