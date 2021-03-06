@extends('layouts.app')

@section('content')
    <div class="row h-100 w-100 m-0">
      <div id="links" class="col-3">@include('admin.includes.links')</div>
      <div id="dish-edit" class="col-9">
          <h4>Edit Dish</h4>
        
      
        <form method="post" enctype="multipart/form-data" action="{{ route('admin.dishes.update', $dish->id) }}">
          @method('PATCH')
          @csrf
          <div class="form-group">
              <label for="name">Name</label>
              <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name', $dish->name) }}">
              @error('name')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
          </div>
      
          <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="5">{{ old('description', $dish->description) }}</textarea>
            @error('description')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>
      
          <div class="form-group mb-4">
            <label for="cover">Choose a Cover to Upload</label>
              <input type="file" class=" mb-2 form-control-file @error('cover') is-invalid @enderror" id="cover-file" name="cover" accept="image/*">
              <input type="text" placeholder="Paste an URL" class="form-control mb-2 @error('cover') is-invalid @enderror" id="cover-url" name="cover" value="{{ old('cover', $dish->cover) }}">
            @error('cover')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
            <div class="mb-2">
              <img src="{{ str_starts_with($dish->cover, 'http') ? $dish->cover : asset('storage/' . $dish->cover) }}" alt="cover-preview" id="cover-preview">
            </div>
          </div>
          <div class="form-group">
              <label for="price">Price</label>
              <input type="number" step="0.01" class="form-control @error('price') is-invalid @enderror" id="price" name="price" value="{{ old('price', $dish->price) }}">
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
      
          <div class="form-group mb-5">
            <label for="visible">Visibility</label>
            <select class="form-control" id="visible" name="visible">
              <option value="0">Hidden</option>
              <option value="1" selected>Visible</option>
            </select>
          </div>
      
          <button type="submit" class="btn btn-success">Save</button>
          <a href="{{ route('admin.dishes.index') }}" class="btn btn-secondary">Back to dishes list</a>
      </form>
      </div>
    </div>

    @section('script')
      <script src="{{ asset('js/cover-preview.js') }}"></script>
    @endsection
@endsection