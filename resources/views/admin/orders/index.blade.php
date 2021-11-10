@extends('layouts.app')


@section('content')
    
    <div class="container">
        <header class="text-center my-5">
            <h1 class="font-weight-bold">My Orders</h1>
        </header>
        
        <div class="row">
            <nav class="col-2">@include('admin.includes.links')</nav>
            <div class="col-10">
                <table class="table bg-dark text-white font-weight-bold">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Address</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Date</th>
                        <th scope="col">Total</th>
                        <th scope="col">Status</th>
                        <th scope="col">View</th>
                    </tr>
                    </thead>
                    <tbody>
                        @forelse ($orders as $order)
                            <tr>
                                <th scope="row">{{ $order->id }}</th>
                                <td>{{ $order->name }}</td>
                                <td>{{ $order->email }}</td>
                                <td>{{ $order->address }}</td>
                                <td>{{ $order->phone }}</td>
                                <td>{{ $order->date }}</td>
                                <td>{{ $order->total }}</td>
                                <td>{{ $order->status }}</td>
                                <td><a href="{{ route('admin.orders.show', $order->id) }}" class="btn btn-primary">View</a></td>
                            </tr>
                        @empty
                        <tr>
                            <td colspan="9" class="text-center">There are not Orders.</td>
                        </tr>
                        @endforelse
                    </tbody>  
                </table>
            </div>
            
        <div> 

    </div>
    
@endsection