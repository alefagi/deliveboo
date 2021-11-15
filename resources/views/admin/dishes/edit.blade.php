@extends('layouts.app')

@section('content')
    <div class="container">
      <header class="d-flex justify-content-between align-items-center">
        <h1>Edit Dish</h1>
      </header>
      
      <form method="post" enctype="multipart/form-data" action="{{ route('admin.dishes.update', $dish->id) }}">
        @method('PATCH')
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
    
        <div class="form-group mb-2">
          <label for="cover">Choose a Cover to Upload</label>
            <input type="file" class="form-control-file @error('cover') is-invalid @enderror" id="cover" name="cover" accept="image/*">
            <input type="text" class="form-control mb-2 @error('cover') is-invalid @enderror" id="cover" name="cover" value="{{ old('cover'), $dish->cover }}">
          @error('cover') 
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
          <div class="mb-2">
            <img src="{{ str_starts_with($dish->cover, 'http') ? $dish->cover : asset('storage/' . $dish->cover) }}" alt="cover-preview" class="img-fluid w-50" id="cover-preview">
          </div>
        </div>

        <div class="form-group">
            <label for="price">Price</label>
            <input type="number" step="0.01" class="form-control @error('price') is-invalid @enderror" id="price" name="price" value="{{ $dish->price }}">
            @error('price') 
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
        </div>

        <div class="mb-4">
          <h6>Tags</h6>
          @foreach ($tags as $tag)
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="tag-{{ $tag->id }}" value="{{ $tag->id }}" name="tags[]" @if (in_array($tag->id, old('tags', $tagsId ?? [] ))) checked @endif>
              <label class="form-check-label" for="tag-{{ $tag->id }}">{!! $tag->icon !!} {{ $tag->name }} </label>
            </div>
          @endforeach
        </div>
      
        <div class="form-group">
          <label for="visible">Visibility</label>
          <select class="form-control" id="visible" name="visible">
            <option value="0">Invisible</option>
            <option value="1" selected>Visible</option>
          </select>
        </div>
    
        <button type="submit" class="btn btn-success">Save</button>
        <a href="{{ route('admin.dishes.index') }}" class="btn btn-secondary">Back to dishes list</a>
    </form>
    </div>

    @section('script')
      <script src="{{ asset('js/cover-preview.js') }}"></script>
    @endsection
@endsection