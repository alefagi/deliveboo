@extends('layouts.guest')

@section('content')
    <div id="confirmation-wrapper" 
    class="vh-100 pt-5" style="backgroung-color : rgba(255, 255, 255, 0.8)">
      <section id="confirmation-section" class="d-flex align-items-center mt-5">
        <div class="container p-2">
            <div class="row">
              <div class="col-12">
                <h1>Purchase went trough. Your food is about to come</h1>
                <hr>
                <h2>Your Data</h2>
                <ul>
                  <li><strong>Name: </strong>{{ $data['name'] }}</li>
                  <li><strong>E-mail: </strong>{{$data['email'] }}</li>
                  <li><strong>Address: </strong>{{$data['address']}}</li>
                  <li><strong>Phone number: </strong>{{$data['phone']}}</li>
                </ul>
      
                <h2>Order Summary</h2>
                <ul>
                  @foreach ($cart as $item)
                  <li>
                   <h5>
                     {{$item['dish']['name']}} | {{$item['dish']['price']}} &euro;
                  </h5>
                  <b><span>Quantity: {{$item['quantity']}}</span></b>
                  <b><p>Price: {{$item['dish']['price'] * $item['quantity'] }} €</p></b>
                </li>
                  @endforeach
                </ul>
                <hr>
                <div>
                  <h4>Total: {{ $total }} €</h3>
                </div>
                <a href="{{url('/')}}" class="btn-style">Back to home</a>
              </div>
            </div>
        </div>
      </section>
    </div>
@endsection

@section('script')
        <script>
        localStorage.clear()
    </script>
@endsection