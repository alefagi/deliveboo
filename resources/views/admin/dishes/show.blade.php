@extends('layouts.app')

@section('content')
<div class="row h-100 w-100 m-0">
  <div id="links" class="col-3">@include('admin.includes.links')</div>

    <div id="dish-show" class="col-9">
      <div class="wr">
        <h1>{{ $dish->name }}</h1>
        <img src="{{ str_starts_with($dish->cover, 'http') ? $dish->cover : asset('storage/' . $dish->cover) }}" class="img-fluid" alt="{{ $dish->name }}">
        <p>{{ $dish->description }}</p>
        @forelse ($dish->tags as $tag)
          <div>{!! $tag->icon !!} {{ $tag->name }}</div>
        @empty -
        @endforelse
        <address>Price: {{ $dish->price }}</address>
        <address>Visibility: {{ $dish->visible ? 'Visible' : 'Hidden' }}</address>
        <div class="d-flex justify-content-end">
          <a href="{{ route('admin.dishes.edit', $dish->id) }}" class="btn btn-warning ml-2">Edit</a>
          <form action="{{ route('admin.dishes.destroy', $dish->id)}}" method="post" class="ml-2 delete-button">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
          </form>
          <a href="{{ route('admin.dishes.index') }}" class="ml-2 btn btn-secondary">Back to dishes list</a>
        </div>
          </div>
      </div>
    </div>

  @section('script')
        <script src="{{ asset('js/confirm-delete.js') }}"></script>
  @endsection
@endsection