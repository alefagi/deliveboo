@extends('layouts.app')


@section('content')
 <nav>@include('admin.includes.links')</nav>
 
@foreach ($dishes as $dish)
    {{$dish->name}}
@endforeach






@endsection