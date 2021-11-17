@extends('layouts.guest')
@section('content')
    <div>
        <div id="app">
            <dishes-list id="{{$id}}"/>
        </div>
    </div>
@endsection

@section('script')
    <script src="{{ asset('js/guestShow.js') }}"></script> 
@endsection

