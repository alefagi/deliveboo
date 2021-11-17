<h1>The order at the restaurant "{{ $user->name }}" was successful</h1>

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
</div>