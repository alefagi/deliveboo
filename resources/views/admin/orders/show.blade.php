@extends('layouts.app')

{{--Vedere se e' piu appropriato una card--}}
@section('content')
<div class="container">
  <h1>{{ $order->name }}</h1>
  <p>{{ $order->email }}</p>
  <ul>
      <li>Address: {{ $order->address }}</li>
      <li>Phone: {{ $order->phone }}</li>
      <li>Date: {{ $order->date }}</li>
      <li>Total: {{ $order->total }}</li>
      <li>Status: {{ $order->status }}</li>
  </ul>
  
  <a href="{{ route('admin.orders.index') }}" class="ml-2 btn btn-secondary">Back to list</a>
    
</div>
    
@endsection