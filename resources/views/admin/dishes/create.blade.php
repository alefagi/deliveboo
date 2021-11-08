@extends('layouts.app')

@section('content')
 <nav> @include('admin.includes.links') </nav>
 
    <h1>Add a new dish</h1>
    <a href="{{ route('admin.dishes.index') }}" class="btn btn-secondary">Back to dishes list</a>
    <form method="post" enctype="multipart/form-data" action="{{ route('admin.dishes.store') }}">
        @csrf

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ $dish->name }}">
            @error('name') 
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
        </div>
      
        <div class="form-group">
          <label for="description">Description</label>
          <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="5">{{ $dish->description }}</textarea>
          @error('description') 
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>
    
        //*************va gestita con l'upload********************
        <div class="form-group">
          <label for="cover">Cover</label>
          <input type="text" class="form-control @error('cover') is-invalid @enderror" id="cover" name="cover" value="{{ $dish->cover }}">
          @error('cover') 
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>
        //*************va gestita con l'upload********************

        <div class="form-group">
            <label for="price">Price</label>
            <input type="number" step="0.01" class="form-control @error('price') is-invalid @enderror" id="price" name="price" value="{{ $dish->price }}">
            @error('price') 
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
        </div>
      
        <div class="form-group">
          <label for="visible">Visibility</label>
          <select class="form-control" id="visible" name="visible">
            <option value="0">Invisible</option>
            <option value="1" selected>Visible</option>
          </select>
        </div>
    
        <button type="submit" class="btn btn-success">Save</button>
    </form>
@endsection