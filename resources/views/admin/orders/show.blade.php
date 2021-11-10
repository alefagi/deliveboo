@extends('layouts.app')

{{--Vedere se e' piu appropriato una card--}}
@section('content')
<div class="container">
  <h1>{{ $order->name }}</h1>
  <p>{{ $order->email }}</p>
  <address>Address: {{ $order->address }}</address>
  <div>Phone: {{ $order->phone }}</div>
  <div>Date: {{ $order->date }}</div>
  <div>Total: {{ $order->total }}</div>
  <div>Status: {{ $order->status }}</div>

  <ul>
    @foreach ($dishes as $dish)
    <li>Nome del piatto: {{ $dish->name }}</li>
    @endforeach
    
  </ul>
  <a href="{{ route('admin.orders.index') }}" class="ml-2 btn btn-secondary">Back to list</a>
  
</div>
    
@endsection