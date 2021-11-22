@extends('layouts.app')

@section('content')
        <div class="row h-100 w-100 m-0">
            <div id="links" class="col-3">@include('admin.includes.links')</div>
            <div id="dishes" class="col-9">
                <h4>All your dishes</h4>
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
                            <th scope="col">Buttons</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($dishes as $dish)
                            <tr>
                                <th scope="row">{{ $dish->id }}</th>
                                <td>{{ $dish->name }}</td>
                                <td>{{ $dish->description }}</td>
                                <td class="cover">
                                    <img  src="{{ str_starts_with($dish->cover, 'http') ? $dish->cover : asset('storage/' . $dish->cover) }}"  alt="{{ $dish->name }}">
                                </td>
                                <td>{{ $dish->price }}</td>
                                <td>
                                    @forelse ($dish->tags as $tag)
                                    <span>{!! $tag->icon !!}</span>
                                    @empty -
                                    @endforelse
                                </td>
                                <td>{{ $dish->visible ? 'Visible' : 'Hidden' }}</td>
                                <td class="d-flex">
                                    <a href="{{ route('admin.dishes.show', $dish->id) }}" class="btn btn-info">View</a>
                                    <a href="{{ route('admin.dishes.edit', $dish->id) }}" class="btn btn-warning ml-2">Edit</a>
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
 

    @section('script')
        <script src="{{ asset('js/confirm-delete.js') }}"></script>
    @endsection
@endsection