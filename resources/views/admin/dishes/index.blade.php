@extends('layouts.app')

@section('content')
    <header class="my-5 d-flex justify-content-between align-items-center">
        <h1 class="text-center w-100">My Dishes</h1>
    </header>

    <div class="container">
        <div class="row">
            <nav class="col-4">@include('admin.includes.links')</nav>

            <div class="col-8">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Description</th>
                            <th scope="col">Cover</th>
                            <th scope="col">Price</th>
                            <th scope="col">Tags</th>
                            <th scope="col">Visibility</th>
                            <th scope="col">View</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Remove</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($dishes as $dish)
                            <tr>
                                <th scope="row">{{ $dish->id }}</th>
                                <td>{{ $dish->name }}</td>
                                <td>{{ $dish->description }}</td>
                                <td><img src="{{ str_starts_with($dish->cover, 'http') ? $dish->cover : asset('storage/' . $dish->cover) }}" class="img-fluid" alt="{{ $dish->name }}"></td>
                                <td>{{ $dish->price }}</td>
                                <td>
                                    @forelse ($dish->tags as $tag)
                                    <span>{!! $tag->icon !!}</span>
                                    @empty -
                                    @endforelse
                                </td>
                                <td>{{ $dish->visible }}</td>
                                <td><a href="{{ route('admin.dishes.show', $dish->id) }}" class="btn btn-primary">View</a></td>
                                <td><a href="{{ route('admin.dishes.edit', $dish->id) }}" class="btn btn-warning">Edit</a></td>
                                <td>
                                    <form action="{{ route('admin.dishes.destroy', $dish->id)}}" method="post" class="ml-2 delete-button">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>    
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="9" class="text-center">There are no dishes to display.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    @section('script')
        <script src="{{ asset('js/confirm-delete.js') }}"></script>
    @endsection
@endsection