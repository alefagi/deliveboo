@extends('layouts.guest')
@section('content')
    <div>
        <div id="app">
            <dishes-list user="{{$user}}" id="{{$id}}"/>
        </div>
    </div>
@endsection

@section('script')
    <script src="{{ asset('js/guestShow.js') }}"></script> 
@endsection

