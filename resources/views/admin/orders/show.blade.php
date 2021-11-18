@extends('layouts.app')

{{--Vedere se e' piu appropriato una card--}}
@section('content')
<div class="row h-100 w-100 m-0">
  <div id="links" class="col-3">@include('admin.includes.links')</div>
  <div id="order-show" class="col-9">
    <h1 class="mb-4">Order details</h1>
    <div class="ml-4">
      <h4>Buyer details</h4>
      <ul class="mb-4 ">
        <li><span><strong>Nome:</strong> {{ $order->name }}</span></li>
        <li><span><strong>Email:</strong> {{ $order->email }}</span></li>
        <li><span><strong>Address: </strong>{{ $order->address }}</span></li>
        <li><span><strong>Phone:</strong> {{ $order->phone }}</span></li>
        <li><span><strong>Date: </strong>{{ $order->date }}</span></li>
        <li><span><strong>Total:</strong> {{ $order->total }}€</span></li>
        
      </ul>
      
      <h4>Ordered Products </h4>
      <ul>
       
        @foreach ($buyied as $d)
          <li>
            <span>{{$d['name']}}---><strong>{{$d['quantity']}}</strong></span>
            
          </li>
          
        @endforeach
      </ul>
    </div>
    <div class="text-right mt-4"><a href="{{ route('admin.orders.index') }}" class="btn btn-secondary">Back to list</a></div>
  
  </div>
</div>
    
@endsection