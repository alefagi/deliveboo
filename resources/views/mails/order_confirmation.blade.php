<h1>The order at the restaurant "{{ $user->name }}" was successful</h1>

<h2>Customer Data</h2>
<ul>
  <li><strong>Name: </strong>{{ $order['name'] }}</li>
  <li><strong>E-mail: </strong>{{$order['email'] }}</li>
  <li><strong>Address: </strong>{{$order['address']}}</li>
  <li><strong>Phone number: </strong>{{$order['phone']}}</li>
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
  <h4>Total: {{ $order['total'] }} €</h3>
</div>