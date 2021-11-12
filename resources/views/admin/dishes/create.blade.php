@extends('layouts.app')

@section('content')
  <header class="my-5 d-flex justify-content-between align-items-center">
    <h1 class="text-center w-100">Add new dish</h1>
  </header>
  
  <div class="container">
    <div class="row">
      <div class="col-4">
        <nav> @include('admin.includes.links') </nav>
      </div>
    
      <div class="col-8">
        <form method="post" enctype="multipart/form-data" action="{{ route('admin.dishes.store') }}">
          @csrf
          <div class="form-group">
              <label for="name">Name</label>
              <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name'), $dish->name }}">
              @error('name')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
          </div>
          <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="5">{{ old('description'), $dish->description }}</textarea>
            @error('description')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>
          <div class="input-group mb-2">
            <div class="custom-file">
              <input type="file" class="custom-file-input @error('cover') is-invalid @enderror" id="cover" name="cover" accept="image/*">
              <label for="cover" class="custom-file-label">Choose a Cover to Upload</label>
              @error('cover') 
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
            <div class="input-group-append">
              <button class="btn btn-outline-danger" type="button" id="remove-cover">Remove</button>
            </div>
          </div>
          <div class="mb-2">
            <img src="https://upload.wikimedia.org/wikipedia/commons/1/14/No_Image_Available.jpg" alt="cover-preview" class="img-fluid w-50" id="cover-preview">
          </div>
          <div class="form-group">
              <label for="price">Price</label>
              <input type="number" step="0.01" class="form-control @error('price') is-invalid @enderror" id="price" name="price" value="{{ old('price'), $dish->price }}">
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
                <input class="form-check-input" type="checkbox" id="tag-{{ $tag->id }}" value="{{ $tag->id }}" name="tags[]" @if (in_array($tag->id, old('tags', $tagsId ?? []))) checked @endif>
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
    </div>
  </div>

  @section('script')
    <script>
      // Add a cover
      const coverElement = document.getElementById('cover');

      coverElement.addEventListener('change', function(){
        const coverInput = document.getElementById("cover").files;

        if (coverInput.length) {
          const fileReader = new FileReader();

          fileReader.onload = function (event) {
            document.getElementById('cover-preview').setAttribute('src', event.target.result);
          };

          fileReader.readAsDataURL(coverInput[0]);
        }
      });

      // Remove a cover
      const removeCoverElement = document.getElementById('remove-cover');
      removeCoverElement.addEventListener('click', function(){
        document.getElementById('cover-preview').setAttribute('src', 'https://upload.wikimedia.org/wikipedia/commons/1/14/No_Image_Available.jpg');
      });

      
    </script>
  @endsection
@endsection