@extends('layouts.app')


@section('content')
        <div class="row w-100 h-100 m-0">
            <div id="links" class="col-3">@include('admin.includes.links')</div>
            <div id="orders" class="col-9">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Address</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Date</th>
                        <th scope="col">Total</th>
                        <th scope="col">View</th>
                    </tr>
                    </thead>
                    <tbody>
                        @forelse ($orders as $order)
                            <tr>
                                <th scope="row">{{ $order->id }}</th>
                                <td >{{ $order->name }}</td>
                                <td>{{ $order->email }}</td>
                                <td>{{ $order->address }}</td>
                                <td>{{ $order->phone }}</td>
                                <td>{{ $order->date }}</td>
                                <td>{{ $order->total }}</td>
                                <td><a href="{{ route('admin.orders.show', $order->id) }}" class="btn btn-info">View</a></td>
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
        
        <footer class="d-flex justify-content-end">
            {{-- {{ $orders->links() }} --}}
        </footer>

    
@endsection