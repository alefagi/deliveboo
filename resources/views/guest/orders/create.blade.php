@extends('layouts.app')

@section('content')

  <div id="order-details" class=" container">
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
        
        <a href=" {{ url("/") }} " class="btn btn-secondary">Back to Chart</a>
        </form>
      </div>
      <div class="col-4">
        <h2>Order Summary</h1>
        <ul class="mt-2">
          
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

<style>
  #order-details{
    background-color: rgb(196, 226, 147);
    width: 100%;
    height: 100%;
    padding-bottom: 20px;
  }
  h1{
    font-weight: 700;
    margin: 20px 0px;
  }
  h2{
    font-weight: 500;
    margin: 20px 0px;
  }
  h5{
    font-weight: 500; 
  }
</style>
@endsection

