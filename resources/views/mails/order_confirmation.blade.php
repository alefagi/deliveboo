{{-- <h1>The order at the restaurant "{{ $user->name }}" was successful</h1>

<h2>Customer Data</h2>
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
         {{$item['dish']['name']}}
      </h5>
      <span>Quantity: {{$item['quantity']}}</span>
      <p>Price: {{$item['dish']['price'] * $item['quantity'] }} €</p>
    </li>
  @endforeach
</ul>
<hr>
<div>
  <h4>Total: {{ $total }} €</h3>
</div> --}}


<section id="confirmation-section">
  <div class="container">
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

<style>
#confirmation-section {
  height: 100%;
  width: 100%;
  border: 1px solid $green;
  border-radius: 5rem;
}
</style>