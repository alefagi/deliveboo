@extends('layouts.guest')
@section('content')
    <div>{{$errorString ?? ""}}</div>
    <div class="container">
        <div id="app">
            <restaurant-list/>
        </div> 
    </div> 
@endsection

@section('script')
<script src="{{ asset('js/guestHome.js') }}"></script> 
@endsection

