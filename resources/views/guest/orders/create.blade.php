@extends('layouts.app')

@section('content')

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-8">
        <h1 class="text-center w-100">Your address data </h1>
        <form method="post" enctype="multipart/form-data" action="{{ url('buy/{cart}') }}">
          @csrf
          <div class="form-group">
              <label for="name">Name</label>
              <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name'), $order->name }}">
              @error('name')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
          </div>

          <div class="form-group">
            <label for="email">E-mail</label>
            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email'), $order->email }}">
            @error('email')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
        </div>
          
        <div class="form-group">
            <label for="address">address</label>
            <input type="text" class="form-control @error('address') is-invalid @enderror" id="address" name="address" value="{{ old('address'), $order->address }}">
            @error('address')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
        </div>

        <div class="form-group">
            <label for="phone">Phone number</label>
            <input type="tel" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" value="{{ old('phone'), $order->phone }}">
            @error('phone')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
        </div>

        

        
          <button type="submit" class="btn btn-success">Save</button>
        
          <a href="http://127.0.0.1:8000/restaurant/{id} " class="btn btn-secondary">Back to Chart</a>
        </form>
      </div>
      <div class="col-4">
        <h1>Order Summary</h1>
        <ul>
          
          @foreach ($cart as $item)
              <li>
               <h5>
                 {{$item->dish->name}}
              </h5>
              <span>Quantity: {{$item->quantity}}</span>
              <p>Price: {{$item->dish->price * $item->quantity }} €</p>
            </li>
          @endforeach
        </ul>
        <hr>
        <div id="total">
          <h4>Total: {{$total}}</h3>
        </div>
      </div>
    </div>
  </div>
@endsection

