@extends('layouts.guest')
@section('content')
    <div>{{$errorString ?? ""}}</div>
    <div>
        <div id="app">
            <restaurant-list/>
        </div> 
    </div> 
@endsection

@section('script')
<script src="https://unpkg.com/vue-slick-carousel
"></script>
<script src="{{ asset('js/guestHome.js') }}"></script> 
@endsection

