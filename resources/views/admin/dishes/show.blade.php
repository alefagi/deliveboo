@extends('layouts.app')

@section('content')
  <div class="container">
    <h1>{{ $dish->name }}</h1>
    <p>{{ $dish->description }}</p>
    <address>Price: {{ $dish->price }}</address>
    <address>Visibility: {{ $dish->visible }}</address>
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
@endsection