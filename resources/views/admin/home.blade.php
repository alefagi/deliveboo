@extends('layouts.app')


@section('content')
<header class="my-5 d-flex justify-content-between align-items-center">
    <h1 class="text-center w-100">My statistics</h1>
</header>
 <div class="container">
     <div class="row">
         <div class="col-4">@include('admin.includes.links')</div>
         <div class="col-8">Statistiche</div>
     </div>
 </div>
@endsection